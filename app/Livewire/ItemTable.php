<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Item;

class ItemTable extends Component
{
    public $search = '';

    public function render()
    {
        $items = Item::with(['category', 'brand', 'warehouse'])
            ->where('name', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'desc')
            ->get();

        return view('livewire.item-table', compact('items'));
    }
}
