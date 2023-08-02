<div>
    <div class="container sm:py-16 py-10">
        <div>
            <h1 class="text-[#3E3C4F] sm:text-8xl text-4xl leading-none mb-0 uppercase text-center">Agenda</h1>
        </div>
    </div>
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-2">
                <select wire:model="current_day_id" wire:change="handleChangeDay">
                    @foreach($schedule_days as $schedule_day)
                        <option value="{{$schedule_day['id']}}">
                            <b>{{$schedule_day['day_number']}}</b> {{$schedule_day['day_month_name']}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div>
            <livewire:event.schedule-detail :schedule_day_id="$current_day_id" />
        </div>
    </div>
</div>
