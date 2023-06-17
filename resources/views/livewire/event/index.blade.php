<div>
    <div class="relative">
        <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/img/banner-home.jpg')}}" class="w-full">
        <div class="absolute w-full h-full top-0 lef-0 text-white flex items-center justify-center z-50">
            <div>
                <h3 class="sm:text-6xl text-lg leading-none mb-0 uppercase">Ya somos</h3>
                <h1 class="sm:text-12xl text-xl font-bold leading-none uppercase mb-0">1,250</h1>
                <p class="uppercase text-right sm:text-4xl text-md sm:-mt-7 sm:mb-3 mb-0">Inscritos</p>

                <div>

                </div>
            </div>
        </div>
        <div class="absolute w-full bottom-0">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#F6F7F7" />
                </g>
            </svg>
        </div>
    </div>

    <div class="container py-5">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-4">
                <div class="bg-white shadow-sm p-8">
                    <h1 class="uppercase text-red">Sobre<br> el evento</h1>
                    <img src="{{asset('img/evento-1.png')}}" class="w-full" />
                </div>
            </div>
            <div class="col-span-8">
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-primary p-8 text-center h-[240px] shadow-sm">
                        <h1 class="uppercase text-[#FCD6D9]">Agenda</h1>
                        <img src="{{asset('img/icono-agenda.png')}}" class="h-[180px] m-auto" />
                    </div>
                    <div class="bg-[#9E004F] p-8 h-[240px] shadow-sm">
                        <div class="grid grid-cols-4">
                            <div class="col-span-3">
                                <h2 class="mb-0 uppercase text-[#FCD6D9]">Más</h2>
                                <p class="-mt-4 mb-2 text-xl uppercase text-[#FCD6D9]">del evento</p>
                                <p class="-mt-2 text-[#FCD6D9]">+ Fecha y hora<br>
                                    + Plano del evento<br>
                                    + Ubicación</p>
                            </div>
                            <div>
                                <img src="{{asset('img/icono-location.png')}}" class="max-w-fit -mt-11 w-auto h-[180px]" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-6 px-8 bg-white mt-6 shadow-sm h-[235px]">
                    <h1 class="text-6xl text-center text-primary uppercase">Expositores</h1>
                    <div x-data="{
                        init() {
                            new Splide(this.$refs.splide, {
                                perPage: 4,
                                gap: '0.5rem',
                                autoplay: true,
                                arrows: false,
                                pagination: false,
                                breakpoints: {
                                    640: {
                                        perPage: 2,
                                    }
                                },
                            }).mount()
                        }
                    }">
                        <div x-ref="splide" class="splide">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    @foreach($speakers as $speaker)
                                        <li class="splide__slide">
                                            <div class="w-[150px] h-[150px] bg-cover bg-center" style="background-image: url('{{$speaker['image_url']}}')"></div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
