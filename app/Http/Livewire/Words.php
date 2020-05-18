<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Category;

class Words extends Component
{
    public $category;
    public function mount(Category $category) {
        $this->category = $category;
    }

    public function render()
    {
        return view('livewire.words');
    }
}
