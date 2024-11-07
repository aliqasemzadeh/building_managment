<?php

namespace App\Livewire\Building;

use App\Models\Building;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $address;

    public function create()
    {
        $this->validate([
           ''
        ]);
        $building = new Building();
        $building->name = $this->name;
        $building->address = $this->address;
        $building->save();

    }

    public function render()
    {
        return view('livewire.building.create');
    }
}
