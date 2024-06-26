<div>
    @if($show_thanks)
        <div class="sm:py-12 py-5">
            <img src="{{asset('img/gracias-registrate.svg')}}" class="mb-8">

            <p class="font-bold font-tiempos mb-3">Importante:</p>
            <p class="text-gray mb-2">- Se solicitará DNI (o carnet de extranjería) de manera obligatoria para el ingreso al evento y se realizará reconocimiento facial por temas de seguridad.</p>
            <p class="text-gray">- Aforo limitado.</p>

            <p class="font-bold text-center text-gray text-xl font-tiempos">Añadir al calendario</p>
            <div class="flex items-center justify-center">
                <a href="https://www.addevent.com/calendar/aW483599+apple" title="Apple" target="_blank" style="display:inline;">
                    <img src="https://cdn.addevent.com/libs/imgs/icon-emd-share-apple-t1.png" alt="Apple" width="45" border="0" style="width:45px;display:inline;" />
                </a>
                <a href="https://www.addevent.com/calendar/aW483599+google" title="Google" target="_blank" style="display:inline;">
                    <img src="https://cdn.addevent.com/libs/imgs/icon-emd-share-google-t1.png" alt="Google" width="45" border="0" style="width:45px;display:inline;" />
                </a>
                <a href="https://www.addevent.com/calendar/aW483599+office365" title="Office 365" target="_blank" style="display:inline;">
                    <img src="https://cdn.addevent.com/libs/imgs/icon-emd-share-office365-t1.png" alt="Office 365" width="45" border="0" style="width:45px;display:inline;" />
                </a>
                <a href="https://www.addevent.com/calendar/aW483599+outlook" title="Outlook" target="_blank" style="display:inline;">
                    <img src="https://cdn.addevent.com/libs/imgs/icon-emd-share-outlook-t1.png" alt="Outlook" width="45" border="0" style="width:45px;display:inline;" />
                </a>
                <a href="https://www.addevent.com/calendar/aW483599+outlookcom" title="Outlook.com" target="_blank" style="display:inline;">
                    <img src="https://cdn.addevent.com/libs/imgs/icon-emd-share-outlookcom-t1.png" alt="Outlook.com" width="45" border="0" style="width:45px;display:inline;" />
                </a>
                <a href="https://www.addevent.com/calendar/aW483599+yahoo" title="Yahoo" target="_blank" style="display:inline;">
                    <img src="https://cdn.addevent.com/libs/imgs/icon-emd-share-yahoo-t1.png" alt="Yahoo" width="45" border="0" style="width:45px;display:inline;" />
                </a>
            </div>
        </div>
    @else
        <img src="{{asset('img/registrate.svg')}}" class="mb-4">
        <form wire:submit.prevent="process">
            <div class="w-full">
                <div class="form-group">
                    <label for="first_name" class="form-label">Nombres: <span class="text-red">*</span></label>
                    <input type="text" name="first_name" id="first_name" wire:model="first_name" />
                    @error('first_name') <span class="text-xs text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="first_name" class="form-label">Apellidos: <span class="text-red">*</span></label>
                    <input type="text" name="last_name" id="last_name" wire:model="last_name" />
                    @error('last_name') <span class="text-xs text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Correo electrónico: <span class="text-red">*</span></label>
                    <input type="text" name="email" id="email" wire:model="email" placeholder="Correo corporativo" />
                    @error('email') <span class="text-xs text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label">Celular:</label>
                    <input type="text" name="phone" id="phone" wire:model="phone" placeholder="Únete a la comunidad de WhatsApp" />
                    @error('phone') <span class="text-xs text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="company" class="form-label">Organización:</label>
                    <input type="text" name="company" id="company" wire:model="company" />
                </div>

                <div class="form-group">
                    <label for="position" class="form-label">Cargo:</label>
                    <input type="text" name="position" id="position" wire:model="position" />
                </div>

                <div class="form-group">
                    <p class="mb-1 font-tiempos text-primary">¿Cuál es tu compromiso con el desarrollo sostenible?</p>
                    <p class="text-primary mb-2">(Elegir más de una palabra)</p>
                    <div class="grid sm:grid-cols-4 grid-cols-3 gap-2 mb-2">
                        @foreach($commitments_options as $item)
                            <button wire:click.prevent="setCommit('{{$item}}')" type="button" class="btn btn-{{(in_array($item, $commitments) ? 'primary' : 'primary-lightest-outline')}}">{{$item}}</button>
                        @endforeach
                    </div>
                    @if($error_commitments)
                        <span class="text-xs text-danger">{{ $error_commitments }}</span>
                    @endif
                </div>

                <div class="mt-3 w-100">
                    <div class="form-check">
                        <input type="checkbox" name="accept_terms" class="form-check-input" id="accept_terms" wire:model="accept_terms">
                        <label class="form-check-label fs-12px" for="accept_terms" >Acepto los <a href="{{route('terms-and-conditions')}}" class="link" target="_blank">términos y condiciones</a> y <a href="{{route('privacy-policies')}}" class="link" target="_blank">políticas de privacidad</a></label>
                    </div>
                    @error('accept_terms') <span class="text-danger fs-12px">{{ $message }}</span> @enderror
                </div>

                <div class="mt-3 w-100">
                    <div class="form-check">
                        <input type="checkbox" name="accept_policy_data" class="form-check-input" id="accept_policy_data" wire:model="accept_policy_data">
                        <label class="form-check-label fs-12px" for="accept_policy_data" >Acepto la <a href="{{route('personal-protection-data')}}" class="link" target="_blank">política de tratamiento de datos personales</a></label>
                    </div>
                    @error('accept_policy_data') <span class="text-danger fs-12px">{{ $message }}</span> @enderror
                </div>

                <div class="pt-5 sm:grid grid-cols-12">
                    <div class="col-span-3">
                        <button type="submit" class="btn btn-red-outline uppercase w-full">Enviar</button>
                    </div>
                </div>
                <div class="mt-4 flex items-center space-x-3">
                    <span class="text-red">*</span>
                    <span class="text-gray-400 uppercase">Campos obligatorios</span>
                </div>
            </div>
        </form>
    @endif
</div>
