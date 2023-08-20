<?php

namespace App\Http\Livewire\Event;

use App\Models\AlliesCategory;
use Livewire\Component;

class Allies extends Component {

    public $current_category_id, $categories, $current_category;

    public function mount() {
        $categories = AlliesCategory::ordered()->get();
        $this->categories = $categories;
        if (count($categories) > 0) {
            $this->current_category_id = $categories[0]->id;
        }
    }

    public function handleChangeCategory($category_id) {
        $this->current_category_id = $category_id;
        $this->emit('change_category', $category_id);
    }

    public function render() {
        return view('livewire.event.allies')->layout('layouts.app', ['header_fixed' => false]);
    }
}
