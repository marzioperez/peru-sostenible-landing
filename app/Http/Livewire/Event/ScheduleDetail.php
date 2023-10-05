<?php

namespace App\Http\Livewire\Event;

use App\Models\ScheduleActivity;
use Livewire\Component;

class ScheduleDetail extends Component {

    public $activities;

    public function mount($schedule_day_id) {
        $this->activities = ScheduleActivity::with('speaker')->where('schedule_day_id', $schedule_day_id)->ordered()->get();
    }

    public function render() {
        return view('livewire.event.schedule-detail');
    }
}
