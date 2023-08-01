<div class="sm:py-10 py-5">
    @if(count($scheduleDay['activities']) > 0)
        <div class="sm:grid grid-cols-12 gap-6">
            <div class="col-span-3">
                @if($scheduleDay['activities'][0]['speaker'])
                    @if($scheduleDay['activities'][0]['speaker']['image_url'])
                        <img src="{{$scheduleDay['activities'][0]['speaker']['image_url']}}" class="w-full speaker-image">
                    @endif
                @endif
            </div>
            <div class="col-span-9">
                <div class="grid grid-cols-12">
                    <div class="col-span-4 uppercase text-red text-sm font-semibold border-b-2 border-red">Nombre / Cargo</div>
                    <div class="col-span-4 uppercase text-red text-sm font-semibold border-b-2 border-red">Tema</div>
                    <div class="col-span-3 uppercase text-red text-sm font-semibold border-b-2 border-red">Horario</div>
                    <div class="border-b-2 border-red"></div>
                </div>
                @foreach($scheduleDay['activities'] as $activity)
                    <div class="w-full class-speaker-row" data-speaker-image-url="{{($activity['speaker'] ? $activity['speaker']['image_url'] : null )}}">
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
                @endforeach
            </div>
        </div>
    @endif
</div>
