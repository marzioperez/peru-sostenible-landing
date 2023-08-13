<footer style="background-image: url({{asset('img/bg-sections.png')}})">
    <div class="absolute w-full top-0 rotate-180">
        <svg class="waves" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#FFFFFF" />
            </g>
        </svg>
    </div>
    <div class="container py-10">
        <div class="sm:grid grid-cols-3">
            <div class="flex justify-center items-center">
                <button type="button" class="btn btn-white uppercase font-semibold btn-xl">¡Queremos escucharte!</button>
            </div>
            <div class="flex justify-center items-center sm:pt-0 pt-10">
                <img src="{{asset('img/logo-evento.svg')}}" alt="{{config('app.name')}}">
            </div>
            <div class="flex justify-center items-center sm:pt-0 pt-10">
                <div>
                    <p class="text-white text-center font-tiempos text-xl">Redes sociales</p>
                    <div class="flex items-center justify-center space-x-3">
                        <a href="#" target="_blank" class="btn-social">
                            <span class="fa-brands fa-linkedin"></span>
                        </a>
                        <a href="#" target="_blank" class="btn-social">
                            <span class="fa-brands fa-instagram"></span>
                        </a>
                        <a href="#" target="_blank" class="btn-social">
                            <span class="fa-brands fa-twitter"></span>
                        </a>
                        <a href="#" target="_blank" class="btn-social">
                            <span class="fa-brands fa-facebook-f"></span>
                        </a>
                        <a href="#" target="_blank" class="btn-social">
                            <span class="fa-brands fa-youtube"></span>
                        </a>
                        <a href="#" target="_blank" class="btn-social">
                            <span class="fa-solid fa-globe"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="py-3 text-center text-sm">
    Web developed by Cien Pies Producciones
</div>

<div class="modal" id="login-modal">
    <div class="modal-content">
        <div class="modal-wrapper">
            <div class="modal-header">
                <div class="flex items-center space-x-3">
                    <div class="modal-close">
                        <span class="text-white text-sm uppercase leading-none">Cerrar</span> <span class="text-[40px] font-light">&times;</span>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <livewire:auth.index />
            </div>
        </div>
    </div>
</div>
