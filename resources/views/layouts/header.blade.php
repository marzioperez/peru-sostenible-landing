<header class="{{($header_relative ? 'relative with-bg' : 'fixed')}}">
    <div class="container">
        <div class="grid grid-cols-3 items-center">
            <div>
                <svg class="menu menu-rotate menu-icon" width="42" viewBox="0 0 42 27">
                    <path class="line top" d="M1 4.46338C1 4.46338 8.89179 2.8012 13.992 3.01982C19.46 3.2542 22.2397 5.63321 27.7059 5.90694C33.0843 6.17628 41.4197 4.46338 41.4197 4.46338" stroke="#EF3340" />
                    <path class="line middle" d="M1 13.8662C1 13.8662 8.89179 12.204 13.992 12.4227C19.46 12.657 22.2397 15.036 27.7059 15.3098C33.0843 15.5791 41.4197 13.8662 41.4197 13.8662" stroke="#EF3340" stroke-width="5"/>
                    <path class="line bottom" d="M1 22.5278C1 22.5278 8.89179 20.8657 13.992 21.0843C19.46 21.3186 22.2397 23.6977 27.7059 23.9714C33.0843 24.2407 41.4197 22.5278 41.4197 22.5278" stroke="#EF3340" stroke-width="5"/>
                </svg>
            </div>
            <div class="flex justify-center">
                <a href="{{route('home')}}">
                    <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/img/logo-evento.svg')}}" class="logo" alt="Perú Sostenible 2023">
                </a>
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
<div class="menu-side">
    <div class="menu-options{{$header_relative ? '' : ' pt-12'}}">
        <a href="{{route('auth')}}" class="btn btn-red-outline flex justify-between uppercase mb-6">
            <span>Regístrate</span>
            <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/img/icono-arrow-diagonal-right-red.svg')}}" class="ml-3 h-[15px]" alt="Menu">
        </a>

        <p><a href="{{route('home')}}" class="menu-option">Inicio</a></p>
        <p><a href="{{route('about')}}" class="menu-option">Sobre el evento</a></p>
        <p><a href="{{route('home')}}" class="menu-option">Agenda</a></p>
        <p><a href="{{route('home')}}" class="menu-option">Más del evento</a></p>
        <p><a href="{{route('home')}}" class="menu-option">Expositores</a></p>
        <p><a href="{{route('home')}}" class="menu-option">Aliados</a></p>
        <p class="py-3"><a href="{{route('home')}}" class="btn-live">En vivo</a></p>
        <p><a href="{{route('home')}}" class="menu-option">Revive las sesiones</a></p>
        <p><a href="{{route('home')}}" class="menu-option">Galería</a></p>
    </div>
    <div class="menu-footer">
        <p class="text-red font-tiempos mb-2"><i>Redes sociales</i></p>
        <div class="flex items-center space-x-3">
            <a href="#" target="_blank" class="btn-social-menu">
                <span class="fa-brands fa-linkedin"></span>
            </a>
            <a href="#" target="_blank" class="btn-social-menu">
                <span class="fa-brands fa-instagram"></span>
            </a>
            <a href="#" target="_blank" class="btn-social-menu">
                <span class="fa-brands fa-twitter"></span>
            </a>
            <a href="#" target="_blank" class="btn-social-menu">
                <span class="fa-brands fa-facebook-f"></span>
            </a>
            <a href="#" target="_blank" class="btn-social-menu">
                <span class="fa-brands fa-youtube"></span>
            </a>
            <a href="#" target="_blank" class="btn-social-menu">
                <span class="fa-solid fa-globe"></span>
            </a>
        </div>
    </div>
</div>
