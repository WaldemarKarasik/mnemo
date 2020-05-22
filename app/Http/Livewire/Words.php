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
    public $error;
    protected $listeners = ['clickedAway'];
    public function mount(Category $category) {
        $this->category = $category;
        $this->words = $category->words;
    }

    public function deleteWord($id) {
        Word::where('id', $id)->delete();
        $this->refreshWords();
    }
    // Чтобы убрать красный бордер инпута когда юзер кликает вне инпута
    public function clickedAway() {
        $this->error = false;
    }
    public function updated($updatedWord, $value) {
        $this->error = false;
    }
    public function updateWord($id) {
        if(!empty($this->updatedWord)) {
            Word::find($id)->update(['name' => $this->updatedWord]);
            $this->refreshWords();
            $this->updatedWord='';
            $this->error = false;
        } else {
            $this->error = true;
        }

    }

    public function refreshWords() {
        return $this->words = Word::where('category_id', $this->category->id)->get();
    }

    public function render()
    {
        return view('livewire.words');
    }
}
