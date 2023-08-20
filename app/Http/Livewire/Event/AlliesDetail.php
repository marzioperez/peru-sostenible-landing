<?php

namespace App\Http\Livewire\Event;

use App\Models\Allie;
use Livewire\Component;

class AlliesDetail extends Component {

    public $allies;

    public function mount($category_id) {
        $this->allies = Allie::where('allie_category_id', $category_id)->get();
    }

    protected $listeners = [
        'change_category' => 'changeCategory'
    ];

    public function changeCategory($category_id) {
        $this->allies = Allie::where('allie_category_id', $category_id)->get();
    }

    public function render() {
        return view('livewire.event.allies-detail');
    }
}
