<div>
    <h3 class="text-[#5F5D5D] mb-3">EN VIVO - Iniciar sesión</h3>
    <form wire:submit.prevent="process">
        <div class="w-full">
            <div class="form-group">
                <label for="email" class="form-label uppercase">Correo electrónico: <span class="text-red">*</span></label>
                <input type="text" name="email" id="email" wire:model="email" placeholder="Correo corporativo" />
                @error('email') <span class="text-xs text-danger">{{ $message }}</span> @enderror
                @if($error) <span class="text-xs text-danger">{{ $error }}</span> @endif
            </div>

            <p class="text-[#5F5D5D] mb-6 text-sm">Al ingresar a la sección EN VIVO por favor darle clic al botón "reproducción o play" para iniciar la transmisión. Puedes comentar en el CHAT o compartir tus preguntas en el espacio de PREGUNTA AQUÍ.</p>

            <div class="sm:grid grid-cols-12">
                <div class="col-span-3">
                    <button type="submit" class="btn btn-red uppercase w-full">Ingresar</button>
                </div>
            </div>
            <div class="mt-6">
                <span class="text-gray-700">Si aún no estás registrado <a href="#" class="font-semibold toggle-auth-forms">¡Regístrate aquí!</a></span>
            </div>
        </div>
    </form>
</div>
