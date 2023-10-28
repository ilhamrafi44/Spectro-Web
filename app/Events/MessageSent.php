<?php

namespace App\Events;

use Pusher\Pusher as Pusher;
use App\Models\Conversations;
use App\Models\Messages;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public $message;
    public $conversation;

    public function __construct(Messages $message, Conversations $conversation)
    {
        $this->message = $message;
        $this->conversation = $conversation;
    }
    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        return new Channel('conversation.' . $this->conversation->id);
    }

    public function broadcastWith()
    {
        return [
            'message' => $this->message,
            'conversation' => $this->conversation
        ];
    }
    public function broadcastAs()
    {
        return 'my-event';
    }
}
