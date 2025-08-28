<?php

namespace App\Livewire;

use App\Models\SubCategory;
use Livewire\Component;

class SubCategorySelect extends Component
{
    // Keep it a Collection always
    public $subcategories;

    public function mount()
    {
        $this->subcategories = collect(); // start empty
    }

    #[\Livewire\Attributes\On('category-selected')]
    public function loadSubCategories($categoryId)
    {
        $this->subcategories = SubCategory::where('category_id', $categoryId)->get();
    }

    public function render()
    {
        return view('livewire.sub-category-select');
    }

}
