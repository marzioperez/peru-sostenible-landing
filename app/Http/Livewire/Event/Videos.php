<?php

namespace App\Http\Livewire\Event;

use App\Models\Video;
use App\Models\VideosCategory;
use Livewire\Component;

class Videos extends Component {

    public $video_categories = [];

    public function mount() {
        $categories = VideosCategory::ordered()->get();
        foreach ($categories as $category) {
            $videos = Video::where('videos_category_id', $category['id'])->ordered()->get();
            $category['videos'] = $videos;
        }
        $this->video_categories = $categories;
    }

    public function render() {
        return view('livewire.event.videos')->layout('layouts.app', ['header_fixed' => false]);
    }
}
