<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryList extends Component
{
    #[On('category-added')]
    public function refreshList()
    {
        // Just force re-render
        $this->dispatch('$refresh');
    }

    public function render()
    {
        // Always pull fresh data when rendering
        return view('livewire.category-list', [
            'categories' => Category::latest()->get(),
        ]);
    }

}
