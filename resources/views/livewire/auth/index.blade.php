<div>
    <div class="grid grid-cols-2">
        <div class="h-screen bg-no-repeat bg-cover flex items-center justify-center" style="background-image: url({{\Illuminate\Support\Facades\Vite::asset('resources/img/login-bg.svg')}})">
            <div class="px-15">
                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/img/logo-evento.svg')}}" class="w-full mb-6">
                <p class="text-white mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pharetra dolor sed auctor hendrerit. Pellentesque luctus placerat eros, sit amet aliquet eros ultrices at. Ut quis lorem ac ligula congue blandit eu ut ipsum. Vestibulum tempus pharetra elementum justo.</p>
                <div class="flex items-center justify-center">
                    <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/img/icono-calendario.svg')}}" class="mr-4">
                    <div class="text-white">
                        <p class="mb-0">Fecha:</p>
                        <h2 class="text-xl font-bold leading-none">Del 12 al 14<br>de octubre</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-screen bg-white flex items-center justify-center">
            <div class="px-15">
                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/img/evento-2023.svg')}}" class="mb-4">
                <livewire:auth.register />
            </div>
        </div>
    </div>
</div>
