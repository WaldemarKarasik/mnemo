<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Footer extends Component
{
    // protected $listeners = ['tailClicked'];

    // public function tailClicked() {
    //     return dd('clicked');
    // }

    public function render()
    {
        return view('livewire.footer');
    }
}
