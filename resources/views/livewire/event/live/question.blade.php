<div>
    <div class="w-full">
        <div class="bg-[#DD4648] py-4 px-5 rounded-tl rounded-tr">
            <h1 class="text-white sm:text-2xl leading-none mb-0 uppercase">Pregunta aquí</h1>
        </div>
    </div>
    <div class="bg-white relative">
        <label>
            <textarea wire:model="question" class="border-gray-400 rounded-tl-none rounded-tr-none rounded-br rounded-bl" name="message" placeholder="Mensaje"></textarea>
        </label>
        <button type="button" wire:click.prevent="sendQuestion" class="btn-send-message">
            <i class="fa-regular fa-paper-plane"></i>
        </button>
    </div>
</div>
