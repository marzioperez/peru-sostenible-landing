<div class="relative">
    <div class="flex items-center cursor-pointer" x-data="{
        open: false,
        toggle() {
            if (this.open) {
                return this.close()
            }
            this.open = true
        },
        close(focusAfter) {
            if (! this.open) return
                this.open = false
            }
        }"
         x-on:keydown.escape.prevent.stop="close($refs.button)"
         x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
         x-id="['dropdown-button']"
         x-on:click="toggle()">

        <p class="text-white font-semibold mb-0 flex items-center"><span class="sm:block hidden pr-2">Hola,</span> {{auth()->user()->full_name}}</p>
        <div x-ref="panel"
             x-show="open"
             x-transition.origin.top.left
             x-on:click.outside="close($refs.button)"
             style="display: none;"
             class="absolute -right-3 mt-2 w-40 bg-white shadow-md sm:top-7 top-8 z-50 border border-gray-300">

            <a href="{{route('my-questions')}}" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">Mis preguntas</a>
            <a href="{{route('user-logout')}}" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500"><span class="text-red-600">Cerrar sesión</span></a>
        </div>
    </div>
</div>
