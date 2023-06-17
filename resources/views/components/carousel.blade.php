@props([
    'items' => [],
    'perPage' => 3,
    'arrows' => true,
    'pagination' => true
])
<div x-data="{
        init() {
            new Splide(this.$refs.splide, {
                perPage: {{$perPage}},
                gap: '0.5rem',
                arrows: {{$arrows}},
                pagination: {{$pagination}},
                breakpoints: {
                    640: {
                        perPage: 1,
                    }
                },
            }).mount()
        },
    }">
    <section x-ref="splide" class="splide" aria-label="Splide/Alpine.js Carousel Example">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach($items as $item)
                    <li class="splide__slide flex flex-col items-center justify-center">
                        <img src="{{$item['image_url']}}" class="w-[150px]">
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</div>
