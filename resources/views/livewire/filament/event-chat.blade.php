<div>
    <div class="w-full">
        <div class="overflow-y-scroll border-l border-r chat-content" style="height: 300px;">
            @foreach ($messages as $message)
                <div class="p-3 rounded-md" style="background-color: rgba(255,255,255,0.3); margin-bottom: 10px;">
                    <div class="font-semibold">{{$message['name']}}</div>
                    <div>{{$message['message']}}</div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="relative" style="margin-top: 10px;">
        <label>
            <textarea wire:model="message" name="message" placeholder="Mensaje" class="filament-forms-textarea-component filament-forms-input block w-full rounded-lg shadow-sm outline-none transition duration-75 focus:border-primary-500 focus:ring-1 focus:ring-inset focus:ring-primary-500 disabled:opacity-70 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-primary-500 border-gray-300"></textarea>
        </label>
        <button type="button" style="margin-top: 15px;" wire:click.prevent="sendMessage" class="filament-button filament-button-size-md inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset dark:focus:ring-offset-0 min-h-[2.25rem] px-4 text-sm text-white shadow focus:ring-white border-transparent bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 filament-page-button-action">
            Enviar mensaje
        </button>
    </div>
</div>
@push('scripts')
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        document.addEventListener('livewire:load', function () {
            let height = document.getElementsByClassName('chat-content')[0].scrollHeight;
            document.getElementsByClassName('chat-content')[0].scrollTo(0, height);
            let pusher = new Pusher('8b317cc8640c671a3803', {
                cluster: 'us2'
            });

            let channel = pusher.subscribe('chat');
            channel.bind('send-message', function(data) {
                Livewire.emit('get_messages');
                let new_height = document.getElementsByClassName('chat-content')[0].scrollHeight;
                document.getElementsByClassName('chat-content')[0].scrollTo(0, new_height);
            });
        });
    </script>
@endpush
