<div>
    <div class="container sm:py-16 py-10">
        <div>
            <h1 class="text-[#3E3C4F] sm:text-8xl text-4xl leading-none mb-0 uppercase text-center">Galería</h1>
        </div>
    </div>
    <div class="container sm:pb-6 pb-10">
        <div class="masonry">
            @foreach($photos as $p => $photo)
                <div class="masonry-item">
                    <img src="{{$photo['image_url']}}" class="w-full" />
                </div>
            @endforeach
        </div>
    </div>
</div>
