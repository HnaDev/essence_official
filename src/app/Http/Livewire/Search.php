<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products;

class Search extends Component
{
    public $search = '';
    public function render()
    {
        return view('livewire.search', [
            'products' => Products::where('name', 'like','%'.$this->search.'%')->get(),
        ]);
    }
}
