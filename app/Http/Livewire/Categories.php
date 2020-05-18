<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Category;
class Categories extends Component
{
    public $categories;
    public function mount() {
        $this->categories = Category::with('words')->get();
    }

    public function addWord() {
        return dd('hel');

    }

    public function render()
    {
        return view('livewire.categories');
    }
}
