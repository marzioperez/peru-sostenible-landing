<div>
    <div class="relative h-screen bg-gray-900">
        <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/img/banner-home.jpg')}}" class="w-full" alt="{{config('app.name')}}" />
        <div class="absolute w-full h-full top-0 lef-0 text-white flex items-center justify-center z-50">
            <div class="text-center">
                <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/img/logo-evento.svg')}}" class="w-full mb-6" />
                <h2 class="text-xl font-bold leading-none uppercase">¡Gracias<br>por tu registro!</h2>
                <p class="font-tiempos">Muy pronto más noticias sobre el evento</p>
                <button class="btn btn-white-outline uppercase">Agenda el evento</button>
            </div>
        </div>
        <div class="absolute w-full bottom-0">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
    </div>
</div>
