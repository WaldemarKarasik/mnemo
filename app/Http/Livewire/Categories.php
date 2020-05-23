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
    public $check="smth";
    public function mount() {
        $this->categories = Category::with('words')->get();
    }
    public function testing() {
        return dd('tesitn');
    }
    public function wordDeleted($id) {

    }

    public function render()
    {
        return view('livewire.categories');
    }
}
