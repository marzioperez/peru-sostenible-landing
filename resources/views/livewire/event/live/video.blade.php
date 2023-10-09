<div class="video-live">
    <div class="video-content">
        {!! $embed !!}
    </div>
    <div class="video-live-loader" style="display: none;">
        <div>
            <i class="fa-solid fa-rotate fa-spin"></i>
            <p>Cargando video...</p>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            let pusher = new Pusher('8b317cc8640c671a3803', {
                cluster: 'us2'
            });

            let channel = pusher.subscribe('video');
            channel.bind('send-video', function(data) {
                //Livewire.emit('get_messages');
                $('.video-live').find('.video-content').empty();

                $('.video-live').find('.video-live-loader').show();
                setTimeout(function() {
                    $('.video-live').find('.video-content').html(data);
                    $('.video-live').find('.video-live-loader').hide();
                }, 3000);
            });
        });
    </script>
@endpush
