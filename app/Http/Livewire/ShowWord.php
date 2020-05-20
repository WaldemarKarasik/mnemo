<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Word;

class ShowWord extends Component
{
    public $words, $word, $wordName, $wordCategory;
    public function mount($word) {
        $this->word = Word::where('name', $word)->first();
        $this->wordName = $this->word->name;
        $this->wordCategory = $this->word->category;
        $this->words = Word::inRandomOrder()->where('category_id', $this->wordCategory->id)->take(5)->get();
        // return dd($this->wordCategory->words);
    }
    public function back() {
        return redirect('/');
    }
    public function render()
    {
        return view('livewire.show-word');
    }
}
