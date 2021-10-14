<?php

namespace App\Http\Livewire;

use App\Models\Business;
use App\Models\MetroStation;
use App\Models\ObjectType;
use Illuminate\Support\Facades\Request;
use Livewire\Component;


class BusinessMapFilter extends Component
{
    public array $filter = [
        'stations_ids' => [],
    ];

    protected $listeners = [
        'filterUpdated' => 'setFilter'
    ];

    public function setFilter(array $filter ): void
    {
        $this->filter = $filter;
        $coords = '[55.77876898178645, 37.74019602734377]';
    }

    public function render()
    {
        $stations = MetroStation::all();

        $object_types = ObjectType::all();

        return view('livewire.business-map-filter', compact('stations', 'object_types'));
    }

    public function updatedFilter()
    {
        $this->emit('filterUpdated', $this->filter);
    }
}
