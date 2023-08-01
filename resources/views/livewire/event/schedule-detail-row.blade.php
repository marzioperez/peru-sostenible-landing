<div class="w-full">
    <div class="sm:grid grid-cols-12">
        <div class="col-span-4 border-b-2 border-red py-3">
            @if($activity['speaker'])
                <p class="mb-0 uppercase text-[#5F5D5D]"><b>{{$activity['speaker']['name']}}</b></p>
                <p class="mb-0 uppercase text-sm text-[#5F5D5D]">{{$activity['speaker']['position']}}</p>
            @endif
        </div>
        <div class="col-span-4 flex items-center border-b-2 border-red py-3">
            <p class="mb-0">{{$activity['title']}}</p>
        </div>
        <div class="col-span-3 flex items-center border-b-2 border-red py-3">
            <p class="mb-0">{{$activity['start']}} a {{$activity['end']}}</p>
        </div>
        <div class="flex items-center border-b-2 border-red py-3"></div>
    </div>
</div>
