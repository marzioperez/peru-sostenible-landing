<div class="w-full">
    <div class="grid sm:grid-cols-4 grid-cols-2 gap-3">
        @foreach($allies as $allie)
            <div>
                <img src="{{$allie['image_url']}}" class="w-full mb-3 cursor-pointer open-allie-modal" data-allie="{{json_encode($allie)}}" alt="{{$allie['name']}}" />
            </div>
        @endforeach
    </div>
</div>
