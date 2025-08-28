<?php

namespace App\Livewire;

use App\Models\Upazila;
use Livewire\Attributes\On;
use Livewire\Component;

class UpazilaSelect extends Component
{
    public $upazilas;
    public function mount(){
        $this->upazilas = collect();
    }

    #[On("duration-selected")]
    public function getUpazila($district_id){
        $this->upazilas = Upazila::where("district_id", $district_id)->get();
    }

    public function render()
    {
        return view('livewire.upazila-select');
    }
}
