<?php

namespace App\Livewire\Pages\Music;

use Livewire\Component;

class IndexPageMusic extends Component
{
    public function render()
    {
        return view('livewire.pages.music.index-page-music')->layout('layouts.layout',['title'=>'musicas']);
    }
}
