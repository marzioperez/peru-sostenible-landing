<?php

namespace App\Http\Livewire\Event\Live;

use App\Settings\GeneralSettings;
use Livewire\Component;

class Video extends Component {

    public $embed = null;

    public function render() {
        $this->embed = app(GeneralSettings::class)->embed;
        return view('livewire.event.live.video');
    }
}
