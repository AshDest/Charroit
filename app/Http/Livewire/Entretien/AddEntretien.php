<?php

namespace App\Http\Livewire\Entretien;

use Livewire\Component;

class AddEntretien extends Component
{
    public $garage_id;
    public $mobile_id;
    public $date_entretien;
    public $entretien;
    public $cout;

    protected $rules = [
        'garage_id' => 'required',
        'mobile_id' => 'required',
        'date_entretien' => 'required',
        'entretien' => 'required',
        'cout' => 'required',
    ];

    protected $messages = [
        'garage_id.required' => 'ce Champ est obligatoire',
        'mobile_id.required' => 'ce Champ est obligatoire',
        'date_entretien.required' => 'ce Champ est obligatoire',
        'entretien.required' => 'ce Champ est obligatoire',
        'cout.required' => 'ce Champ est obligatoire',
    ];

    // vider les champs
    public function resetFields()
    {
        $this->garage_id = '';
        $this->mobile_id = '';
        $this->date_entretien = '';
        $this->entretien = '';
        $this->cout = '';
    }
    // realtime validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.entretien.add-entretien');
    }
}
