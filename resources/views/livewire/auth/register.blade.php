<div>
    @if($show_thanks)
        <div class="sm:py-12 py-5">
            <img src="{{asset('img/gracias-registrate.svg')}}" class="mb-8">
            <p class="font-bold text-center text-gray text-xl font-tiempos">Añadir al calendario</p>
        </div>
    @else
        <img src="{{asset('img/registrate.svg')}}" class="mb-4">
        <form wire:submit.prevent="process">
            <div class="w-full">
                <div class="form-group">
                    <label for="first_name" class="form-label">Nombres</label>
                    <input type="text" name="first_name" id="first_name" wire:model="first_name" />
                    @error('first_name') <span class="text-xs text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="first_name" class="form-label">Apellidos</label>
                    <input type="text" name="last_name" id="last_name" wire:model="last_name" />
                    @error('last_name') <span class="text-xs text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="text" name="email" id="email" wire:model="email" />
                    @error('email') <span class="text-xs text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label">Celular</label>
                    <input type="text" name="phone" id="phone" wire:model="phone" />
                    @error('phone') <span class="text-xs text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="company" class="form-label">Organización</label>
                    <input type="text" name="company" id="company" wire:model="company" />
                </div>

                <div class="form-group">
                    <p class="mb-1 font-tiempos text-primary">¿Cuál es tu compromiso con el desarrollo sostenible?</p>
                    <p class="text-primary mb-2">Elegir más de una palabra</p>
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
                        <label class="form-check-label fs-12px" for="accept_terms" >Acepto los Términos y condiciones</label>
                    </div>
                    @error('accept_terms') <span class="text-danger fs-12px">{{ $message }}</span> @enderror
                </div>

                <div class="col-span-2 flex justify-center pt-3">
                    <button type="submit" class="btn btn-red-outline uppercase">Enviar</button>
                </div>
            </div>
        </form>
    @endif
</div>
