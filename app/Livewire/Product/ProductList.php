<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    public $items = [];      // accumulated products
    public $page = 1;        // current page number
    public $perPage = 12;    // items per batch
    public $hasMore = true;  // whether more pages exist
    public $loading = false; // guard against double calls
    public $search = "";

    public function mount()
    {
        $this->loadPage(); // first batch
    }

    public function updatedSearch()
    {
        // reset state when search changes
        $this->reset(['items', 'page', 'hasMore']);
        $this->page = 1;
        $this->loadPage();
    }

    public function loadMore()
    {
        if ($this->loading || !$this->hasMore) return;

        $this->loading = true;
        $this->page++;
        $this->loadPage();
        $this->loading = false;
    }

    protected function loadPage(): void
    {
        // $paginator = Product::latest()->paginate(
        //     $this->perPage, ['*'], 'page', $this->page
        // );

        // // Merge the new items with the already-loaded ones
        // $this->items = array_merge($this->items, $paginator->items());
        // $this->hasMore = $paginator->hasMorePages();

        $query = Product::latest();

        if (!empty($this->search)) {
            $query->where('name', 'like', "%{$this->search}%");
        }

        $paginator = $query->paginate(
            $this->perPage, ['*'], 'page', $this->page
        );

        $this->items = array_merge($this->items, $paginator->items());
        $this->hasMore = $paginator->hasMorePages();
    }

    public function render()
    {
        // $products = Product::paginate(12);
        // return view('livewire.product.product-list',compact('products'));
        return view('livewire.product.product-list');
    }
}
