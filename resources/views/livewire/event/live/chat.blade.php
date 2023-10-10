<div>
    <div class="w-full">
        <div class="bg-[#DD4648] py-4 px-5 rounded-tl rounded-tr">
            <h1 class="text-white sm:text-2xl leading-none mb-0 uppercase">Chat</h1>
        </div>
        @if($loggedIn)
            <div class="chat-content">
                @foreach ($messages as $message)
                    <div class="message">
                        <div class="message-name">{{$message['name']}}</div>
                        <div class="message-text">{{$message['message']}}</div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    @if($loggedIn)
        <div class="bg-white relative">
            <label>
                <textarea wire:model="message" class="border-gray-400 rounded-tl-none rounded-tr-none rounded-br rounded-bl" name="message" placeholder="Mensaje"></textarea>
            </label>
            <button type="button" wire:click.prevent="sendMessage" class="btn-send-message">
                <i class="fa-regular fa-paper-plane"></i>
            </button>
        </div>
    @else
        <div class="unavailable-box h-[350px] rounded-br rounded-bl">
            <div>
                <i class="fa-solid fa-ban"></i>
            </div>
        </div>
    @endif

</div>
@push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            let pusher = new Pusher('8b317cc8640c671a3803', {
                cluster: 'us2'
            });

            let channel = pusher.subscribe('chat');
            channel.bind('send-message', function(data) {
                Livewire.emit('get_messages');
                if ($('div.chat-content').length > 0) {
                    let height = $('div.chat-content')[0].scrollHeight;
                    $('div.chat-content').animate({scrollTop: height});
                }
            });
        });
    </script>
@endpush
