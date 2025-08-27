<?php

namespace App\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;

class Post extends Component
{
    public $title = "Ahmed Bappy";
    // public $checkme = false;
    // public $selectid = "";

    // public function chnageName($name){
    //     $this->title = $name;
    // }

    // public function chnageNameForm($name){
    //     $this->title = $name;
    // }

    public function mount($name){
        $this->title = $name;
    }

    public function updated(){
        $this->title = Str::slug($this->title);
    }

    public function render()
    {
        return view('livewire.post');
    }
}
