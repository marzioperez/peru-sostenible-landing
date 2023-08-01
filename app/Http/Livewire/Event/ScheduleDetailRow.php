<?php

namespace App\Http\Livewire\Event;

use App\Models\ScheduleActivity;
use Livewire\Component;

class ScheduleDetailRow extends Component {

    public $activity;

    public function mount($activity_id) {
        $this->activity = ScheduleActivity::with('speaker')->find($activity_id);
    }

    public function render() {
        return view('livewire.event.schedule-detail-row');
    }
}
