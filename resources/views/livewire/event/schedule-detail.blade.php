<div class="sm:py-10 py-5">
    @if(count($scheduleDay['activities']) > 0)
        <div class="sm:grid grid-cols-12 gap-6">
            <div class="col-span-12">
                <div class="grid grid-cols-12">
                    <div class="col-span-4 uppercase text-red text-sm font-semibold border-b-2 border-red">Nombre / Cargo</div>
                    <div class="col-span-4 uppercase text-red text-sm font-semibold border-b-2 border-red">Tema</div>
                    <div class="col-span-3 uppercase text-red text-sm font-semibold border-b-2 border-red">Horario</div>
                    <div class="border-b-2 border-red"></div>
                </div>
                @foreach($scheduleDay['activities'] as $activity)
                    <div class="w-full">
                        <div class="sm:grid grid-cols-12">
                            <div class="col-span-4 border-b-2 border-red py-3">
                                @if($activity['presentation_type'] === \App\Models\ScheduleActivity::SPEAKER)
                                    @if($activity['speaker'])
                                        <p class="mb-0 uppercase text-[#5F5D5D]"><b>{{$activity['speaker']['name']}}</b></p>
                                        <p class="mb-0 uppercase text-sm text-[#5F5D5D]">{{$activity['speaker']['position']}}</p>
                                    @endif
                                @endif
                                @if($activity['presentation_type'] === \App\Models\ScheduleActivity::PANELIST_GROUP)
                                    <div class="panelist-group-header">
                                        <p class="mb-0 uppercase text-[#5F5D5D]"><b>{{$activity['panelist_group']['name']}}</b></p>
                                        <div class="show" data-id="{{$activity['panelist_group']['id']}}">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                    <div class="panelist-group-detail item-{{$activity['panelist_group']['id']}} pt-3 pl-3">
                                        @if(count($activity['panelist_group']['speakers']) > 0)
                                            @foreach($activity['panelist_group']['speakers'] as $speaker)
                                                <div class="pb-2">
                                                    <p class="mb-0 uppercase text-[#5F5D5D]"><b>{{$speaker['speaker']['name']}}</b></p>
                                                    <p class="mb-0 uppercase text-sm text-[#5F5D5D]">{{$speaker['speaker']['position']}}</p>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                 @endif
                            </div>
                            <div class="col-span-4 flex items-center border-b-2 border-red py-3">
                                <p class="mb-0">{{$activity['title']}}</p>
                            </div>
                            <div class="col-span-3 flex items-center border-b-2 border-red py-3">
                                <p class="mb-0">{{date('h:i', strtotime($activity['start']))}} a {{date('h:i', strtotime($activity['end']))}}</p>
                            </div>
                            <div class="flex items-center border-b-2 border-red py-3">
                                @if($activity['add_event_id'])
                                    <a class="add-event-button addeventatc" style="box-shadow: none !important;" data-id="{{$activity['add_event_id']}}" href="https://www.addevent.com/event/{{$activity['add_event_id']}}" target="_blank">
                                        <b>Add event</b>
                                        <img src="{{asset('img/icono-add-event.svg')}}" />
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
