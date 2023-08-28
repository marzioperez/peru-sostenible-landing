<div>
    <div class="container sm:py-16 py-10">
        <div>
            <h1 class="text-[#3E3C4F] sm:text-8xl text-4xl leading-none mb-0 uppercase text-center">Aliados</h1>
        </div>
    </div>
    <div class="container">
        <div class="sm:flex grid grid-cols-12 justify-center gap-5 mb-5">
            @foreach($categories as $c => $category)
                <div class="sm:col-span-2 col-span-6">
                    <button data-id="{{$category['id']}}" class="btn {{($c === 0 ? ' active' : '')}} btn-change-category-allies">
                        {{$category['name']}}
                    </button>
                </div>
            @endforeach
        </div>
        @foreach($categories as $c => $category)
            <div class="category-allies{{($c === 0 ? ' active' : '')}} item-{{$category['id']}}">
                <livewire:event.allies-detail :category_id="$category['id']" />
            </div>
        @endforeach
    </div>
</div>
