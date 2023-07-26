<header>
    <div class="container">
        <div class="grid grid-cols-3 items-center">
            <div>
                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/img/icono-menu.svg')}}" class="h-[28px]" alt="Menu">
            </div>
            <div class="flex justify-center">
                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/img/logo-evento.svg')}}" class="logo" alt="Perú Sostenible 2023">
            </div>
            <div class="flex justify-end">
                <a href="{{route('auth')}}" class="btn btn-white-outline flex justify-between uppercase">
                    <span>Regístrate</span>
                    <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/img/icono-arrow-diagonal-right-white.svg')}}" class="ml-3 h-[15px]" alt="Menu">
                </a>
            </div>
        </div>
    </div>
</header>
