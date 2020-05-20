<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Category;
use App\Word;
class Categories extends Component
{
    public $listeners=['wordDeleted'];
    public $categories;
    public $newWord;
    public function mount() {
        $this->categories = Category::with('words')->get();
    }

    public function wordDeleted($id) {

    }

    public function render()
    {
        return view('livewire.categories');
    }
}
