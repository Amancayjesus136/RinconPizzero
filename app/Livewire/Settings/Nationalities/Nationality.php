<?php

namespace App\Livewire\Settings\Nationalities;

use App\Models\Settings\Nationality as SettingsNationality;
use Livewire\Component;
use Livewire\WithPagination;

class Nationality extends Component
{
    public $name_national;
    public $status_nationality = 1;
    use WithPagination;

    public function render()
    {
        return view('livewire.settings.nationalities.nationality', [
            'nationalitys' => SettingsNationality::paginate(10),
        ]);
    }

    private function resetInputFields()
    {
        $this->name_national = '';
        $this->status_nationality = 1;
    }

    public function store()
    {
        SettingsNationality::create([
            'name_national' => $this->name_national,
            'status_nationality' => $this->status_nationality,
        ]);

        session()->flash('success', 'Nationality created successfully.');

        $this->resetInputFields();
    }

}

