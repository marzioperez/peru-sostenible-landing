<?php

namespace App\Http\Livewire\Event;

use App\Models\ScheduleActivity;
use App\Models\ScheduleDay;
use Livewire\Component;

class Schedule extends Component {

    public $current_day, $current_day_id, $activities = [], $schedule_days;

    public function mount() {
        $this->schedule_days = ScheduleDay::all();
        $current_day = ScheduleDay::whereDate('schedule_date', now())->get()->first();
        if (!$current_day) {
            $current_day = ScheduleDay::all()->first();
        }
        $this->current_day = $current_day;
        $this->current_day_id = $current_day['id'];
        $this->activities = ScheduleActivity::with('speaker')->where('schedule_day_id', $current_day['id'])->get();
    }

    public function handleChangeDay() {
        $this->emit('change_schedule_day', $this->current_day_id);
    }

    public function render() {
        return view('livewire.event.schedule')->layout('layouts.app', ['header_fixed' => false]);
    }
}
