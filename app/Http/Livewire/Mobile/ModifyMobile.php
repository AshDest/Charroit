<?php

namespace App\Http\Livewire\Mobile;

use App\Models\Mobile;
use App\Models\Section;
use App\Models\Type_Mobile;
use Livewire\Component;

class ModifyMobile extends Component
{
    public $immatriculation;
    public $num_chassis;
    public $marque;
    public $couleur;
    public $anneefabrication;
    public $kilometrage;
    public $type_id;
    public $section_id;

    public $id;
    protected $rules = [
        'immatriculation' => 'required',
        'num_chassis' => 'required',
        'marque' => 'required',
        'couleur' => 'required',
        'anneefabrication' => 'required',
        'kilometrage' => 'required',
        'type_id' => 'required',
        'section_id' => 'required'

    ];

    protected $messages = [
        'designation.required' => 'ce Champ est obligatoire',

        'immatriculation.required' => 'ce Champ est obligatoire',
        'num_chassis.required' => 'ce Champ est obligatoire',
        'marque.required' => 'ce Champ est obligatoire',
        'couleur.required' => 'ce Champ est obligatoire',
        'anneefabrication.required' => 'ce Champ est obligatoire',
        'kilometrage.required' => 'ce Champ est obligatoire',
        'type_id.required' => 'ce Champ est obligatoire',
        'section_id.required' => 'ce Champ est obligatoire'
    ];

    // vider les champs
    public function resetFields()
    {
        $this->immatriculation = '';
        $this->num_chassis = '';
        $this->marque = '';
        $this->couleur = '';
        $this->anneefabrication = '';
        $this->kilometrage = '';
        $this->type_id = null;
        $this->section_id = null;
    }


    // realtime validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount(){
        $var = Mobile::find($this->id);
        $this->designation = $var->designation;

        $this->immatriculation = $var->immatriculation;
        $this->num_chassis = $var->num_chassis;
        $this->marque = $var->marque;
        $this->couleur = $var->couleur;
        $this->anneefabrication = $var->anneefabrication;
        $this->kilometrage = $var->kilometrage;
        $this->type_id = $var->type_id;
        $this->section_id = $var->section_id;
    }
    public function render()
    {
        $typemobiles = Type_Mobile::all();
        $sections = Section::all();
        return view('livewire.mobile.modify-mobile', ['typemobiles' => $typemobiles], ['sections' => $sections]);
    }
}
