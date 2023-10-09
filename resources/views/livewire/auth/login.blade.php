<div>
    <img src="{{asset('img/registrate.svg')}}" class="mb-6">
        <form wire:submit.prevent="process">
            <div class="w-full">
                <div class="form-group">
                    <label for="email" class="form-label">Correo electrónico: <span class="text-red">*</span></label>
                    <input type="text" name="email" id="email" wire:model="email" placeholder="Correo corporativo" />
                    @error('email') <span class="text-xs text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="sm:grid grid-cols-12">
                    <div class="col-span-3">
                        <button type="submit" class="btn btn-red-outline uppercase w-full">Ingresa</button>
                    </div>
                </div>
                <div class="mt-4 flex items-center space-x-2">
                    <span class="text-red">*</span>
                    <span class="text-gray-400 uppercase text-xs">Campos obligatorios</span>
                </div>
            </div>
        </form>
</div>
