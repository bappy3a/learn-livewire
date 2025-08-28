<?php

namespace App\Livewire;

use App\Models\District;
use Livewire\Attributes\On;
use Livewire\Component;

class DistrictSelect extends Component
{
    public $districts;
    public $selectDurations = null;
    public $selectDeloDurations = 1;
    public function mount(){
        $this->districts = collect();
    }

    public function updatedSelectDurations($selectDurations){
        $this->selectDeloDurations = $selectDurations;
        $this->dispatch('duration-selected',$selectDurations);
    }


    #[On("division-selected")]
    public function getDistricts($division_id){
        $this->districts = District::where("division_id", $division_id)->get();
    }

    public function render()
    {
        return view('livewire.district-select');
    }
}
