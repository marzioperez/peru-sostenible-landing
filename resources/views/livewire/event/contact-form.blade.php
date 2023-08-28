<div>
    @if($show_thanks)
        <div class="sm:py-12 py-5">
            <h2 class="text-red text-center">Gracias por ponerte en contacto con nosotros</h2>
            <p class="text-center">Muy pronto nos estaremos comunicando.</p>
        </div>
    @else
        <img src="{{asset('img/queremos-escucharte.svg')}}" class="mb-4">
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
                    <input type="text" name="email" id="email" wire:model="email" />
                    @error('email') <span class="text-xs text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="message" class="form-label">Mensaje: <span class="text-red">*</span></label>
                    <textarea wire:model="message" name="message"></textarea>
                    @error('email') <span class="text-xs text-danger">{{ $message }}</span> @enderror
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
