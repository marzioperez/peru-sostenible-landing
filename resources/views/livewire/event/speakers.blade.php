<div>
    <div class="container sm:py-16 py-10">
        <div>
            <h1 class="text-[#3E3C4F] sm:text-8xl text-4xl leading-none mb-0 uppercase text-center">Expositores</h1>
        </div>
    </div>
    <div class="container">
        <div class="grid grid-cols-4 gap-6">
            @foreach($speakers as $speaker)
                <div class="p-3">
                    <img src="{{$speaker['image_url']}}" class="w-full mb-3" alt="{{$speaker['name']}}" />
                    <p class="mb-0 uppercase text-[#5F5D5D]"><b>{{$speaker['name']}}</b></p>
                    <p class="mb-0 uppercase text-sm text-[#5F5D5D]">{{$speaker['position']}}</p>
                    <button type="button" class="btn btn-red-outline flex justify-between mt-3">
                        <span>Ver biografía</span>
                        <img src="{{asset('img/icono-arrow-diagonal-right-red.svg')}}" class="ml-3 h-[15px]" alt="Biografía de {{$speaker['name']}}">
                    </button>
                </div>
            @endforeach
        </div>
    </div>
</div>
