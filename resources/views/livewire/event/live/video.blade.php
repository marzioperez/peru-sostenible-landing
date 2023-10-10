<div class="video-live">
    @if($loggedIn)
        <div class="video-content">
            {!! $embed !!}
        </div>
        <div class="video-live-loader" style="display: none;">
            <div>
                <i class="fa-solid fa-rotate fa-spin"></i>
                <p>Cargando video...</p>
            </div>
        </div>
    @else
        <div class="login-message">
            <div>
                <p>Para acceder a esta sección debes ingresar o registrarte.</p>
                <button class="btn btn-red w-[200px] open-modal" data-modal="login-modal">Ingresar</button>
                <div class="my-3">ó</div>
                <button class="btn btn-red-outline w-[200px] open-modal" data-modal="register-modal">Registrarme</button>
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

            let channel = pusher.subscribe('video');
            channel.bind('send-video', function(data) {
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
