<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    public function render()
    {
        public $search = '';
        public function render()
    {
        return view('livewire.search', [
            'products' => Products::where('name', 'like','%'.$this->search.'%')->get();
        ]);
    }
    }
}
