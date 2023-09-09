<div>
    <div class="container sm:py-16 py-10">
        <div>
            <p class="text-[#3E3C4F] sm:text-8xl text-4xl leading-none mb-0 uppercase text-center">Revive las</p>
            <h1 class="text-[#3E3C4F] sm:text-8xl text-4xl leading-none mb-0 uppercase text-center">Sesiones</h1>
        </div>
    </div>
    <div class="container sm:pb-6 pb-10">
        <div class="sm:flex grid grid-cols-12 justify-center gap-5 mb-5">
            @foreach($video_categories as $c => $category)
                @if(count($category['videos']) > 0)
                    <div class="sm:col-span-2 col-span-6">
                        <button data-id="{{$category['id']}}" class="btn {{($c === 0 ? ' active' : '')}} btn-change-category-videos">
                            {{$category['name']}}
                        </button>
                    </div>
                @endif
            @endforeach
        </div>
        @foreach($video_categories as $c => $category)
            @if(count($category['videos']) > 0)
                <div class="category-videos{{($c === 0 ? ' active' : '')}} item-{{$category['id']}}">
                    <div class="grid sm:grid-cols-4 grid-cols-2 gap-3">
                        @foreach($category['videos'] as $video)
                            <div class="open-video" data-video="{{$video}}">
                                <img src="{{$video['image_url']}}" class="w-full" />
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
