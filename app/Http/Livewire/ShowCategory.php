<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Category;
class ShowCategory extends Component
{
    public $category;

    public function mount($category) {
        $this->category = Category::where('name', $category)->first();
    }

    public function render()
    {
        return view('livewire.show-category');
    }
}
