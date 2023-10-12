<div>
    <div class="w-full">
        <div class="overflow-y-scroll border-l border-r chat-content" style="height: 300px;">
            @foreach ($messages as $message)
                <div class="p-3 rounded-md relative" style="background-color: rgba(255,255,255,0.3); margin-bottom: 10px;">
                    <div class="font-semibold">{{$message['name']}}</div>
                    <div>{{$message['message']}}</div>
                    <button wire:click.prevent="deleteMessage({{$message['id']}})" class="absolute top-3 right-3 filament-link inline-flex items-center justify-center gap-0.5 font-medium outline-none hover:underline focus:underline text-sm text-danger-600 hover:text-danger-500 dark:text-danger-500 dark:hover:text-danger-400 filament-tables-link-action">
                        <svg class="filament-link-icon w-4 h-4 mr-1 rtl:ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
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
