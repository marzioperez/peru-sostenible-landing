<div>
    <div class="container sm:py-16 py-10">
        <div>
            <h1 class="text-[#3E3C4F] sm:text-8xl text-4xl leading-none mb-0 uppercase text-center">Agenda</h1>
        </div>
    </div>
    <div class="container">
        <div class="grid grid-cols-12 gap-3">
            @foreach($schedule_days as $schedule_day)
                <div class="sm:col-span-2 col-span-4">
                    <button wire:click.prevent="handleChangeDay({{$schedule_day['id']}})" class="btn {{($current_day_id === $schedule_day['id'] ? 'btn-purple' : 'btn-purple-outline')}} w-full">
                        {{$schedule_day['day_number']}} {{$schedule_day['day_month_name']}}
                    </button>
                </div>
            @endforeach
        </div>
        <div>
            <livewire:event.schedule-detail :schedule_day_id="$current_day_id" />
        </div>
    </div>
</div>
