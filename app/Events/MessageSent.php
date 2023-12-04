<?php

namespace App\Events;

use App\Models\Conversations;
use App\Models\Messages;
use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcastNow
{
    use Dispatchable, SerializesModels;

    public $message;
    public $conversation;

    public function __construct(Messages $message, Conversations $conversation)
    {
        $this->message = $message;
        $this->conversation = $conversation;
    }

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
