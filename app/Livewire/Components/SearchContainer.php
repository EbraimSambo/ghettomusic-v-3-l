<?php

namespace App\Livewire\Components;

use App\Models\Music;
use Livewire\Attributes\Url;
use Livewire\Component;

class SearchContainer extends Component
{
    #[Url()]
    public $query;
    public $results= [];

    public function render(Music $music)
    {
        if (strlen($this->query) > 0) {
            $this->results = $music->where('title', 'like', '%' . $this->query. '%')->get();
        }

        return view('livewire.components.search-container');
    }
}
