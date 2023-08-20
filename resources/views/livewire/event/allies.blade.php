<div>
    <div class="container sm:py-16 py-10">
        <div>
            <h1 class="text-[#3E3C4F] sm:text-8xl text-4xl leading-none mb-0 uppercase text-center">Aliados</h1>
        </div>
    </div>
    <div class="container">
        <div class="grid grid-cols-12 gap-5">
            @foreach($categories as $category)
                <div class="sm:col-span-2 col-span-6">
                    <button wire:click.prevent="handleChangeCategory({{$category['id']}})" class="btn uppercase {{($current_category_id === $category['id'] ? 'btn-purple' : 'btn-purple-outline')}} w-full">
                        {{$category['name']}}
                    </button>
                </div>
            @endforeach
        </div>
        <div>
            <livewire:event.allies-detail :category_id="$current_category_id" />
        </div>
    </div>
</div>
