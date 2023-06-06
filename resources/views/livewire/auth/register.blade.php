<div>
    <p class="text-xl text-red">Regístrate</p>

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
                <label for="linkedin" class="form-label">Empresa</label>
                <input type="text" name="linkedin" id="linkedin" wire:model="linkedin" />
            </div>

            <div class="form-group">
                <p>¿Cuál es tu compromiso con el desarrollo sostenible?</p>
                <p>Elegir más de una palabra</p>
                <div class="grid grid-cols-4 gap-3">
                    @foreach($commitments_options as $item)
                        <button wire:click.prevent="setCommit('{{$item}}')" type="button" class="btn btn-{{(in_array($item, $commitments) ? 'primary-outline' : 'primary-lightest-outline')}}">{{$item}}</button>
                    @endforeach
                </div>
            </div>

            <div class="col-span-2 flex justify-center pt-3">
                <button type="submit" class="btn btn-red-outline">Enviar</button>
            </div>
        </div>
    </form>
</div>
