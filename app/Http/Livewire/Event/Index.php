<?php

namespace App\Http\Livewire\Event;

use App\Models\Speaker;
use App\Models\User;
use App\Settings\GeneralSettings;
use Livewire\Component;

class Index extends Component {

    public $speakers;
    public bool $show_words = false;
    public bool $show_countdown = false;
    public $end_date_countdown = null;
    public bool $show_users_number = false;
    public $users_default_number = 0;

    public function mount() {
        $this->speakers = Speaker::with('activities')->ordered()->get();
//        dd($this->speakers);
        $this->show_countdown = app(GeneralSettings::class)->show_countdown;
        $this->end_date_countdown = (app(GeneralSettings::class)->end_date_countdown ? app(GeneralSettings::class)->end_date_countdown : null);
        $this->show_users_number = app(GeneralSettings::class)->show_users_number;
        $this->users_default_number = (intval(app(GeneralSettings::class)->users_default_number) > 0 ? intval(app(GeneralSettings::class)->users_default_number) : User::all()->count());
    }

    public function render() {
        return view('livewire.event.index');
    }
}
