<?php
namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Warehouse;

class WarehouseTable extends Component
{
    use WithPagination;

    public $search = '';

    protected $paginationTheme = 'tailwind';

    public function updatingSearch()
    {
        $this->resetPage(); // reset to page 1 on search
    }

    public function render()
    {
        $warehouses = Warehouse::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('location', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('livewire.warehouse-table', compact('warehouses'));
    }
    
}