<?php

namespace App\Livewire;

use App\Models\Division;
use Livewire\Component;

class DivisionSelect extends Component
{
    public $divisions = [];
    public $selectDivision = null;

    public $demoUpdate = 1;

    public function mount(){
        $this->divisions = Division::orderBy("name","asc")->get();
    }
    public function updatedSelectDivision($selectDivision){
        $this->dispatch('division-selected',$selectDivision);
    }
    public function render()
    {
        return view('livewire.division-select');
    }
}
