<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Category;
use App\Word;
class Words extends Component
{
    public $category;
    public $words;
    public $updatedWord;
    public function mount(Category $category) {
        $this->category = $category;
        $this->words = $category->words;
    }

    public function deleteWord($id) {
        Word::where('id', $id)->delete();
        $this->refreshWords();
    }

    public function updateWord($id) {
        Word::find($id)->update(['name' => $this->updatedWord]);
        $this->refreshWords();
        $this->updatedWord='';
    }

    public function refreshWords() {
        return $this->words = Word::where('category_id', $this->category->id)->get();
    }

    public function render()
    {
        return view('livewire.words');
    }
}
