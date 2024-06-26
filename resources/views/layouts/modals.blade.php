<div class="modal" id="register-modal">
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
                <livewire:auth.register :in_live="\Illuminate\Support\Facades\Route::is('live')" />
            </div>
        </div>
    </div>
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
                <livewire:auth.login />
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal-contact">
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
                <livewire:event.contact-form />
            </div>
        </div>
    </div>
</div>

<div class="modal modal-speaker">
    <div class="modal-content">
        <div class="modal-wrapper">
            <div class="modal-header">
                <div class="flex items-center space-x-3">
                    <div class="modal-close">
                        <span class="text-[40px] font-light">&times;</span>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div>
                    <div class="sm:grid grid-cols-12 mb-6 gap-5">
                        <div class="col-span-4">
                            <div class="modal-speaker-image"></div>
                        </div>
                        <div class="sm:col-span-8 sm:flex items-end">
                            <div>
                                <h5 class="modal-speaker-name">Nombre Aliado</h5>
                                <p class="modal-speaker-position">Cargo</p>
                                <div class="modal-speaker-social">
                                    <a href="#" class="modal-speaker-social-circle linkedin" target="_blank">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a href="#" class="modal-speaker-social-circle facebook" target="_blank">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="modal-speaker-social-circle twitter" target="_blank">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                    <a href="#" class="modal-speaker-social-circle instagram" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="#" class="modal-speaker-social-circle web" target="_blank">
                                        <i class="fa fa-globe"></i>
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

<div class="modal modal-allie">
    <div class="modal-content">
        <div class="modal-wrapper">
            <div class="modal-header">
                <div class="flex items-center space-x-3">
                    <div class="modal-close">
                        <span class="text-[40px] font-light">&times;</span>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div>
                    <div class="sm:grid grid-cols-12 mb-6 gap-5">
                        <div class="col-span-4">
                            <div class="modal-allie-image"></div>
                        </div>
                        <div class="sm:col-span-8 sm:flex items-end">
                            <div>
                                <h5 class="modal-allie-name">Nombre Aliado</h5>
                                <div class="modal-allie-social sm:pt-0 pt-3">
                                    <a href="#" class="modal-allie-social-circle linkedin" target="_blank">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a href="#" class="modal-allie-social-circle instagram" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="#" class="modal-allie-social-circle twitter-x" target="_blank">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                    <a href="#" class="modal-allie-social-circle facebook" target="_blank">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="modal-allie-social-circle web" target="_blank">
                                        <i class="fa fa-globe"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-allie-embed"></div>
                    <div class="modal-allie-biography">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non finibus neque. Nam bibendum lacinia turpis tincidunt mattis. In hac habitasse platea dictumst. Vestibulum posuere ac erat eu hendrerit.</p>
                        <p>Nullam id interdum orci. Cras sed tristique odio. In felis odio, pellentesque id convallis non, rutrum finibus quam. Etiam lobortis massa nunc, tempus dictum odio accumsan sit amet. Fusce mollis dui luctus.</p>
                        <p>Pellentesque nibh non, semper felis. Nam et finibus ex. Curabitur cursus turpis ac nisi aliquam molestie at eget purus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-video">
    <div class="modal-content">
        <div class="modal-wrapper">
            <div class="modal-header">
                <div class="flex items-center space-x-3">
                    <div class="modal-close">
                        <span class="text-[40px] font-light">&times;</span>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="modal-vide-embed-content"></div>
            </div>
        </div>
    </div>
</div>
