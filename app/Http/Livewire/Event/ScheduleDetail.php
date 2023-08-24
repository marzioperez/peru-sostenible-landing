<?php

namespace App\Http\Livewire\Event;

use App\Models\ScheduleDay;
use Livewire\Component;

class ScheduleDetail extends Component {

    public $scheduleDay;

    public function mount($schedule_day_id) {
        $this->scheduleDay = ScheduleDay::with('activities.speaker')->find($schedule_day_id);
    }

    protected $listeners = [
        'change_schedule_day' => 'changeScheduleDay'
    ];

    public function changeScheduleDay($id) {
        $this->scheduleDay = ScheduleDay::with('activities.speaker', 'activities.panelist_group.speakers.speaker')->find($id);
    }

    public function render() {
        return view('livewire.event.schedule-detail');
    }
}
