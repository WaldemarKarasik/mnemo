<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Category;
use App\Word;
class ShowCategory extends Component
{
    public $category, $fullCategory, $words;
    public $newWordName, $key, $link, $definition;
    public $errorN, $errorD, $errorK, $errorL;
    protected $listeners = ['deleteAllClicked'];
    public function mount($category) {
        $this->category = Category::where('name', $category)->first();
        $this->fullCategory = Category::where('id', $this->category->id)->get();
        // return dd($this->words = $this->fullCategory);
        $this->words = Word::where('category_id', $this->category->id)->get();
    }
    public function addWord() {
        if(empty($this->newWordName)) {
            $this->addError('newName', 'Cannot be empty');
            return $this->errorN = true;
        } elseif(empty($this->definition)) {
            $this->errorN = false;
            $this->addError('definition', 'Cannot be empty');
            return $this->errorD = true;
        } elseif(empty($this->key)) {
            $this->errorD = false;
            $this->addError('key', 'Cannot be empty');
            return $this->errorK = true;
        } elseif(empty($this->link)) {
            $this->errorK = false;
            $this->addError('link', 'Cannot be empty');
            return $this->errorL = true;
        } else {
            $this->errorL = false;
            $this->validate([
                'newWordName' => 'required',
                'key' => 'required',
                'link' => 'required',
                'definition' => 'required'
            ]);
            Word::create(['name' => $this->newWordName, 'category_id' => $this->category->id, 'key' => $this->key, 'definition' => $this->definition, 'link_sentence' => $this->link]);
            $this->refreshWordsAfterWordAdded();
        }
    }
    public function refreshWordsAfterWordAdded() {
        return $this->words = Word::where('category_id', $this->category->id)->get();
    }
    public function deleteAllClicked() {
        Word::where('category_id', $this->category->id)->delete();

        // Word::update(['category_id' => 0]);
        // Word::truncate();
        $this->refreshWordsAfterWordAdded();
    }
    public function back() {
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.show-category');
    }
}
