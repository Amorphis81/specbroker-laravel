<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BusinessFilter extends Component
{
    public $object_types;

    public function render()
    {
        return view('livewire.business-filter');
    }
}
