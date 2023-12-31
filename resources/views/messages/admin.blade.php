@extends('layouts.chat')
@section('content')
    <div class="card bg-light shadow-sm vh-100 rounded-0">
        <div class="card-header bg-white shadow-md border border-bottom d-flex align-items-center">
            <div class="fs-3 d-flex">
                <div class="symbol symbol-35px symbol-circle">
                    <!--begin::Avatar-->
                </div>
                <h3 class="card-title mx-4">
                    <div class="fs-3">{{ $conversation->user2->name }} - {{ $conversation->user1->name }} </div>
                </h3>
            </div>
            <div class="card-toolbar">
                <button onclick="window.close();" class="btn btn-sm btn-primary">
                    Tutup
                </button>
            </div>
        </div>
        <div class="card-body card-scroll bg-gray-300" id="cardBody">
            <div class="row">
                <div id="messages" class="mb-4">
                    @foreach ($messages as $message)
                        <div
                            class="card mb-3 col-8 bg{{ $message->user_id == $conversation->user1->id ? '-gray-600 text-white ms-auto' : '-white' }} card-body p-3">
                            <div class="card-text">
                                {{ $message->content }}</div>
                            <small
                                class="{{ $message->user_id === $conversation->user1->id ? 'text-gray-300' : 'text-muted' }} text-end">{{ \Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</small>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="bg-white p-3">
            <div class="text-center fs-4">Dalam Mode Monitoring</div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        $(document).ready(function() {
            var cardBody = $('#cardBody');
            cardBody.scrollTop(cardBody[0].scrollHeight);
        });

        function handleKeyDown(event) {
            if (event.keyCode === 13) {
                event.preventDefault(); // Mencegah perilaku default dari tombol "Enter"
                document.getElementById('sendBtn').click(); // Memanggil fungsi yang diinginkan di sini
            }
        }

        var conversationId = '{{ $conversation->id }}'; // Replace with the correct conversation ID
        var pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
            cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
            encrypted: true
        });

        var channel = pusher.subscribe('conversation.' + conversationId);
        channel.bind('my-event', function(data) {
            appendMessage(data.message);
        });

        function appendMessage(message) {
            var messageContainer = $('#messages');
            var messageTime = "{{ \Carbon\Carbon::parse($message->created_at ?? '')->diffForHumans() }}";
            var newMessage = `

            <div class="card-body card mb-3 col-8 bg${message.user_id === {{ $conversation->user1->id }} ? '-gray-600 text-white ms-auto' : '-white'} p-3">
                <div class="card-text">${message.content}</div>
                <small class="${message.user_id === {{ $conversation->user1->id }} ? 'text-gray-300' : 'text-muted'} text-end">${messageTime}</small>
            </div>`;
            messageContainer.append(newMessage);
            playNotificationSound();
            var cardBody = $('#cardBody');
            if (cardBody[0].scrollHeight > cardBody.height()) {
                cardBody.scrollTop(cardBody[0].scrollHeight);
            }
        }

        function playNotificationSound() {
            var audio = new Audio('/assets/sound/notification.wav'); // Ganti dengan path ke file audio notifikasi
            audio.play();
        }
    </script>
@endpush
