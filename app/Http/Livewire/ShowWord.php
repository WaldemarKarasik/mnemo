<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Word;

class ShowWord extends Component
{
    public $word, $wordName, $wordCategory;
    public function mount($word) {
        $this->word = Word::where('name', $word)->first();
        $this->wordName = $this->word->name;
        $this->wordCategory = $this->word->category;
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
