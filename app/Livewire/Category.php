<?php

namespace App\Livewire;

use App\Models\Category as ModelsCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Category extends Component
{
    use WithFileUploads;
    public $name,$sub_title,$body,$image;

    public function categoryStore(){
        $data = New ModelsCategory();
        $data->name = $this->name;
        $data->sub_title = $this->sub_title;
        $data->body = $this->body;
        if($this->image){
            $data->image = $this->image->store('photos', 'public');
        }
        $data->save();
        $this->dispatch('category-added')->to(CategoryList::class);
        $this->reset(['name','sub_title','body','image']);
    }
    public function render()
    {
        return view('livewire.category');
    }
}
