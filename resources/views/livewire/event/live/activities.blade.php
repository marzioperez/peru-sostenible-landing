<div>
    @if($loggedIn)
        @if(count($activities) > 0)
            <div class="mt-8">
                <div class="grid grid-cols-12">
                    <div class="col-span-4 uppercase text-red text-sm font-semibold border-b-2 border-red">Bloque</div>
                    <div class="col-span-4 uppercase text-red text-sm font-semibold border-b-2 border-red">Tema</div>
                    <div class="col-span-3 uppercase text-red text-sm font-semibold border-b-2 border-red">Horario</div>
                    <div class="border-b-2 border-red"></div>
                </div>
                <div class="live-activities">
                    @foreach($activities as $activity)
                        <div class="activity{{($activity['id'] . '' === $current_activity_id ? ' active' : '')}}">
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
                                        @if(count($activity['panelist_group']['speakers']) > 0)
                                            <div class="show" data-id="{{$activity['panelist_group']['id']}}">
                                                <i class="fas fa-chevron-right"></i>
                                            </div>
                                        @endif
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
                            <div class="flex items-center border-b-2 border-red py-3 activity-item activity-{{$activity['id']}}">
                                @if($activity['id'] . '' === $current_activity_id)
                                    <div class="circle"></div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    @else
        <div class="unavailable-box h-[250px] rounded">
            <div>
                <i class="fa-solid fa-ban"></i>
            </div>
        </div>
    @endif
</div>
@push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            let pusher = new Pusher('8b317cc8640c671a3803', {
                cluster: 'us2'
            });

            let channel = pusher.subscribe('activity');
            channel.bind('update-activity', function(data) {
                $('.activity .activity-item').empty();
                $('.activity .activity-item').removeClass('active');
                 let activity_item = $(`.activity-item.activity-${data}`);
                if(activity_item.length > 0) {
                    activity_item.html('<div class="circle"></div>').toggleClass('active');
                    $('div.live-activities').scrollDivToElement(activity_item);
                }
            });
        });
    </script>
@endpush
