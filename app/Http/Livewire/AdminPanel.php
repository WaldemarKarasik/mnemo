<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App;
use App\Category;
use Exception;

class AdminPanel extends Component
{
    protected $listeners = ['enterPressed', 'enterDeletePressed', 'osRefusal'];
    public $newCategory;
    public $categoryName, $emptyError, $noCategoryError;
    public function enterPressed() {
        $this->validate([
            'newCategory' => 'required',
        ]);

        Category::create(['name' => $this->newCategory]);
        $this->emptyError = false;
    }
    public function removeError() {
        $this->resetErrorBag('message');
        $this->categoryName = '';
        $this->emptyError = false;
    }
    public function enterDeletePressed() {
        // $this->validate([
        //     'categoryName' => 'required',
        // ]);
        // if(empty($this->categoryName)) {
        //     $this->emptyError = true;
        // } else {
        // Category::where('name', $this->categoryName)->first()->delete();
        // $this->emit('refreshRequired');
        // }
        if(!empty($this->categoryName)) {
            $er = Category::where('name', $this->categoryName)->delete();
            if($er == 0) {
                $this->addError('message', 'Category not found');
                $this->emit('hideInput');
                $this->emptyError = true;
            } else {
                $this->emit('refreshRequired');
            }

            // if(!empty($er)) {
            //     $er = collect($er);
            //     $er->delete();
            //     $this->emit('refreshRequired');
            // }
        } else {

            $this->emptyError = true;
        }
    }
    public function osRefusal() {
        App::abort(404);
    }
    public function render()
    {
        return view('livewire.admin-panel');
    }
}
