<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategorySelect extends Component
{
    public array $categories = [];
    public ?int $selectedCategory = null;

    public function mount()
    {
        $this->categories = Category::all()->toArray();
    }

    // Livewire 3 event dispatch
    public function updatedSelectedCategory(?int $value)
    {
        $this->dispatch('category-selected', $value);
    }

    public function render()
    {
        return view('livewire.category-select');
    }
}
