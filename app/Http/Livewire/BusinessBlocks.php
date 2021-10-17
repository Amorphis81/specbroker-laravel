<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BusinessBlocks extends Component
{
    public $businesses_static;

    public function render()
    {
        return view('livewire.business-blocks');
    }
}
