<?php

namespace App\Http\Livewire\Event\Live;

use App\Models\ScheduleActivity;
use App\Models\ScheduleDay;
use App\Settings\GeneralSettings;
use Livewire\Component;

class Activities extends Component {

    public $activities = [];
    public $current_activity_id = null;
    public $loggedIn = false;

    public function mount($loggedIn) {
        $this->loggedIn = $loggedIn;
    }

    public function render() {
        // $current_day = ScheduleDay::whereDate('schedule_date', now())->get()->first();
        $current_day = ScheduleDay::get()->first();
        if ($current_day) {
            $this->activities = ScheduleActivity::with('speaker', 'panelist_group')->where('schedule_day_id', $current_day->id)->get();
        }
        $this->current_activity_id = app(GeneralSettings::class)->current_activity_id;
        return view('livewire.event.live.activities');
    }
}
