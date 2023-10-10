<div>
    <div class="banner-content">
        <div class="banner-words">
            <livewire:event.words-chart />
            <div class="bg-banner-words" style="background-image: url({{asset('img/bg-banner-words.png')}})"></div>
        </div>
        <div class="absolute w-full h-full top-0 lef-0 text-white flex items-center justify-center z-20">
            <div>
                @if($show_users_number)
                    <h3 class="sm:text-6xl text-xl sm:text-left text-center leading-none mb-0 uppercase">Ya somos</h3>
                    <h1 class="sm:text-12xl text-center text-6xl font-bold leading-none uppercase mb-0">{{number_format($this->users_default_number, 0,',')}}</h1>
                    <p class="uppercase sm:text-right text-center sm:text-4xl text-lg sm:-mt-7 sm:mb-3 mb-0">Inscritos</p>
                @endif
                @if($show_countdown)
                    <div>
                        <x-countdown :date_time="$end_date_countdown" />
                    </div>
               @endif
            </div>
        </div>
        <div class="absolute w-full bottom-3">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#FFFFFF" />
                </g>
            </svg>
        </div>
    </div>

    <div class="container py-10">
        <div class="sm:grid grid-cols-12 gap-6">
            <div class="col-span-4">
                <div class="bg-[#DD4648] shadow-sm p-8 zoom-content">
                    <a href="{{route('about')}}">
                        <h1 class="uppercase text-white ml-5">Sobre<br> el evento</h1>
                        <img src="{{asset('img/evento-1.png')}}" class="w-full" />
                    </a>
                </div>
            </div>
            <div class="col-span-8">
                <div class="sm:grid grid-cols-2 gap-6">
                    <a href="{{route('schedule')}}">
                        <div class="bg-[#25254E] zoom-content p-8 flex items-center justify-center text-center h-[220px] shadow-sm">
                            <h1 class="uppercase sm:text-6xl text-3xl text-white">Agenda</h1>
                        </div>
                    </a>
                    <a href="{{route('more-details')}}">
                        <div class="bg-[#F2C0D7] zoom-content p-8 sm:h-[220px] shadow-sm flex items-center zoom-content">
                            <h2 class="mb-0 uppercase sm:text-5xl text-2xl text-[#921E4E]">Más<br>detalles</h2>
                        </div>
                    </a>
                </div>
                <div class="py-6 px-8 bg-[#921E4E] mt-6 shadow-sm h-fit">
                    <h1 class="sm:text-6xl text-3xl text-white uppercase">
                        <a href="{{route('speakers')}}">Expositores</a>
                    </h1>
                    <div class="slick-speakers">
                        @foreach($speakers as $speaker)
                            <div class="slick-speakers-item">
                                <div class="sm:w-[180px] mx-2 sm:h-[180px] h-[150px] bg-cover bg-no-repeat bg-center cursor-pointer open-modal-speaker" data-speaker="{{json_encode($speaker)}}" style="background-image: url('{{$speaker['image_url']}}')"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 my-5 bg-no-repeat bg-cover bg-center flex items-center justify-center space-x-6" style="background-image: url({{asset('img/bg-sections.png')}})">
        <h1 class="font-tiempos text-white sm:text-6xl text-xl">¡Súmate al evento!</h1>
        <button type="button" class="btn btn-white-outline flex justify-between uppercase open-modal" data-modal="register-modal">
            <span>Regístrate</span>
            <img src="{{asset('img/icono-arrow-diagonal-right-white.svg')}}" class="ml-3 h-[15px]">
        </button>
    </div>

    <div class="container py-5">
        <div class="sm:grid grid-cols-12 gap-6">
            <div class="col-span-5">
                <a href="{{route('allies')}}">
                    <div class="bg-[#DD4648] flex items-center justify-center p-8 h-[490px] shadow-sm zoom-content">
                        <h1 class="mb-0 uppercase text-white text-center sm:text-7xl text-3xl">Aliados</h1>
                    </div>
                </a>
            </div>
            <div class="col-span-7">
                <a href="{{route('gallery')}}">
                    <div class="bg-[#921E4E] zoom-content p-8 h-[260px] flex items-center shadow-sm">
                        <h1 class="uppercase text-white sm:text-6xl text-3xl leading-none">Ga<br class="hidden sm:block" />le<br class="hidden sm:block" />ría</h1>
                    </div>
                </a>
                <div class="grid grid-cols-2 gap-6 mt-5">
                    <div class="bg-[#F2C0D7] zoom-content px-5 pt-6 pb-3 flex items-end sm:h-[215px] relative">
                        <div class="bg-red h-[15px] w-[15px] rounded-full absolute top-4 right-4"></div>
                        <h1 class="font-bold text-[#921E4E] uppercase leading-none sm:text-6xl text-3xl mb-0">En<br class="hidden sm:block" /> vivo</h1>
                    </div>
                    <a href="{{route('videos')}}">
                        <div class="bg-[#25254E] zoom-content px-3 py-6 flex items-center justify-center sm:h-[215px]">
                            <h2 class="text-white uppercase leading-none sm:text-4xl text-xl mb-0">Revive las <br class="hidden sm:block" /><b>sesiones</b></h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
