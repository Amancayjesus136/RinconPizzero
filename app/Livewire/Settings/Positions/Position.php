<?php

namespace App\Livewire\Settings\Positions;

use App\Models\Settings\Positions;
use Livewire\Component;
use Livewire\WithPagination;

class Position extends Component
{
    public $name_position;
    public $description_position;
    public $status_position = 1;
    use WithPagination;

    public function render()
    {
        return view('livewire.settings.positions.position', [
            'positions' => Positions::paginate(10),
        ]);
    }

    private function resetInputFields()
    {
        $this->name_position = '';
        $this->description_position = '';
        $this->status_position = 1;
    }

    public function store()
    {
        Positions::create([
            'name_position' => $this->name_position,
            'description_position' => $this->description_position,
            'status_position' => $this->status_position,
        ]);

        session()->flash('success', 'Puesto creado correctamente.');

        $this->resetInputFields();
    }
}
