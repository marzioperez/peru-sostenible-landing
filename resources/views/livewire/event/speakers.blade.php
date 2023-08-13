<div>
    <div class="container sm:py-16 py-10">
        <div>
            <h1 class="text-[#3E3C4F] sm:text-8xl text-4xl leading-none mb-0 uppercase text-center">Expositores</h1>
        </div>
    </div>
    <div class="container">
        <div class="grid grid-cols-4 gap-6">
            @foreach($speakers as $speaker)
                <div class="p-3">
                    <img src="{{$speaker['image_url']}}" class="w-full mb-3" alt="{{$speaker['name']}}" />
                    <p class="mb-0 uppercase text-[#5F5D5D]"><b>{{$speaker['name']}}</b></p>
                    <p class="mb-0 uppercase text-sm text-[#5F5D5D]">{{$speaker['position']}}</p>
                    <button type="button" class="btn btn-red-outline flex justify-between mt-3 open-modal-speaker" data-speaker="{{json_encode($speaker)}}">
                        <span>Ver biografía</span>
                        <img src="{{asset('img/icono-arrow-diagonal-right-red.svg')}}" class="ml-3 h-[15px]" alt="Biografía de {{$speaker['name']}}">
                    </button>
                </div>
            @endforeach
        </div>
    </div>

    <div class="modal modal-speaker">
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
                    <div>
                        <div class="grid grid-cols-12 mb-6 gap-5">
                            <div class="col-span-4">
                                <div class="modal-speaker-image"></div>
                            </div>
                            <div class="col-span-8 flex items-end">
                                <div>
                                    <h5 class="modal-speaker-name">Nombre Expositor</h5>
                                    <p class="modal-speaker-position">Cargo</p>
                                    <div class="modal-speaker-social">
                                        <a href="#" class="modal-speaker-social-circle facebook" target="_blank">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a href="#" class="modal-speaker-social-circle linkedin" target="_blank">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                        <a href="#" class="modal-speaker-social-circle email" target="_blank">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                        <a href="#" class="modal-speaker-social-simple whatsapp" target="_blank">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-speaker-biography">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non finibus neque. Nam bibendum lacinia turpis tincidunt mattis. In hac habitasse platea dictumst. Vestibulum posuere ac erat eu hendrerit.</p>
                            <p>Nullam id interdum orci. Cras sed tristique odio. In felis odio, pellentesque id convallis non, rutrum finibus quam. Etiam lobortis massa nunc, tempus dictum odio accumsan sit amet. Fusce mollis dui luctus.</p>
                            <p>Pellentesque nibh non, semper felis. Nam et finibus ex. Curabitur cursus turpis ac nisi aliquam molestie at eget purus.</p>
                        </div>
                        <div class="modal-speaker-activities">
                            <h5 class="text-red text-center uppercase mb-8">Participación en el evento</h5>
                            <div class="row">
                                <div class="column column-1 uppercase text-red font-semibold">Tema</div>
                                <div class="column column-2 uppercase text-red font-semibold">Horario</div>
                                <div class="column column-3 uppercase text-red"></div>
                            </div>
                            <div class="w-full modal-speaker-activities-list"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
