<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Word;
class SearchDropdown extends Component
{
    public $search;
    public $words, $wordsCollection;
    protected $listeners = ['tailClicked'];
    public function mount() {
    }
    public function tailClicked() {
        return dd('clicked');
    }
    public function updatedSearch() {

        if(strlen($this->search) >= 2) {
            $this->words = Word::where('name', 'like', '%' . $this->search . '%')->get();
            $this->wordsCollection = Word::where('name', 'like', '%' . $this->search . '%')->get();
        }
        if($this->search == '') {
            $this->words = [];
        }
    }

    public function clearSearch() {
        $this->search = '';
    }

    public function render()
    {

        return view('livewire.search-dropdown');
    }
}
