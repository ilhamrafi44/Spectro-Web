@extends('layouts.chat')
@section('content')
    <div class="card bg-light shadow-sm vh-100 rounded-0">
        <div class="card-header bg-white shadow-md border border-bottom d-flex align-items-center">
            @if ($conversation->user1_id === Auth::user()->id)
                <div class="fs-3 d-flex">
                    <div class="symbol symbol-35px symbol-circle">
                        <!--begin::Avatar-->
                        @if ($conversation->user2->file_profile_id == null)
                            <img alt="Logo" class="symbol symbol-25px"
                                src="https://t4.ftcdn.net/jpg/04/10/43/77/360_F_410437733_hdq4Q3QOH9uwh0mcqAhRFzOKfrCR24Ta.jpg" />
                        @else
                            <img alt="Logo" class="symbol symbol-25px"
                                src="/storage/file/images/profile/{{ $conversation->user2->file_profile_id }}" />
                        @endif
                    </div>
                    <h3 class="card-title mx-4">
                        <div class="fs-3">{{ $conversation->user2->name }} </div>
                    </h3>
                </div>
            @else
                <div class="fs-3 d-flex">
                    <div class="symbol  symbol-35px symbol-circle">
                        <!--begin::Avatar-->
                        @if ($conversation->user1->file_profile_id == null)
                            <img alt="Logo" class="symbol symbol-25px"
                                src="https://t4.ftcdn.net/jpg/04/10/43/77/360_F_410437733_hdq4Q3QOH9uwh0mcqAhRFzOKfrCR24Ta.jpg" />
                        @else
                            <img alt="Logo" class="symbol symbol-25px"
                                src="/storage/file/images/profile/{{ $conversation->user1->file_profile_id }}" />
                        @endif
                    </div>
                    <h3 class="card-title mx-4">
                        <div class="fs-3">{{ $conversation->user1->name }} </div>
                    </h3>
                </div>
            @endif
            {{-- <div class="card-toolbar">
                <button class="btn-close text-reset"
                    id="closeIframeBtn"></button>

            </div> --}}
        </div>
        <div class="card-body card-scroll bg-gray-300" id="cardBody">
            <div class="row">
                <div id="messages" class="mb-4">
                    @foreach ($messages as $message)
                        <div
                            class="card mb-3 col-8 bg{{ $message->user_id === auth()->id() ? '-gray-600 text-white ms-auto' : '-white' }} card-body p-3">
                            <div class="card-text">
                                {{ $message->content }}</div>
                            <small
                                class="{{ $message->user_id === auth()->id() ? 'text-gray-300' : 'text-muted' }} text-end">{{ \Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</small>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="bg-white p-3">

            <div class="input-group mb-3">
                <input type="text" id="messageInput" onkeydown="handleKeyDown(event)" class="form-control"
                    placeholder="Type your message here" aria-label="Type your message here" aria-describedby="sendBtn">

                <button class="btn btn-primary" type="button" id="sendBtn">Kirim</button>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        document.getElementById('closeIframeBtn').addEventListener('click', function() {
            window.parent.postMessage('closeOffcanvas', '*');
        });
    </script>
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

        $('#sendBtn').click(function() {
            var message = $('#messageInput').val();
            $('#messageInput').val('');
            $.ajax({
                method: 'POST',
                url: '/conversations/' + conversationId + '/messages',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    message: message,
                    _token: "{{ csrf_token() }}",
                },
                success: function() {
                    // Halo
                }
            });

        });

        function appendMessage(message) {
            var messageContainer = $('#messages');
            var messageTime = "{{ \Carbon\Carbon::parse($message->created_at ?? '')->diffForHumans() }}";
            var newMessage = `

            <div class="card-body card mb-3 col-8 bg${message.user_id === {{ auth()->id() }} ? '-gray-600 text-white ms-auto' : '-white'} p-3">
                <div class="card-text">${message.content}</div>
                <small class="${message.user_id === {{ auth()->id() }} ? 'text-gray-300' : 'text-muted'} text-end">${messageTime}</small>
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
