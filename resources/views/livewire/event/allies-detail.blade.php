<div class="w-full">
    <div class="grid sm:grid-cols-4 grid-cols-2 gap-6">
        @foreach($allies as $allie)
            <div class="p-3">
                <img src="{{$allie['image_url']}}" class="w-full mb-3 cursor-pointer open-allie-modal" alt="{{$allie['name']}}" />
            </div>
        @endforeach
    </div>
</div>
