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
    public $intervalle;


    public $ids;
    protected $rules = [
        'immatriculation' => 'required',
        'num_chassis' => 'required',
        'marque' => 'required',
        'couleur' => 'required',
        'kilometrage' => 'required',
        'type_id' => 'required',
        'section_id' => 'required',
        'intervalle' => 'required'
    ];

    protected $messages = [
        'immatriculation.required' => 'ce Champ est obligatoire',
        'num_chassis.required' => 'ce Champ est obligatoire',
        'marque.required' => 'ce Champ est obligatoire',
        'couleur.required' => 'ce Champ est obligatoire',
        'kilometrage.required' => 'ce Champ est obligatoire',
        'type_id.required' => 'ce Champ est obligatoire',
        'section_id.required' => 'ce Champ est obligatoire',
        'intervalle.required' => 'ce Champ est obligatoire'
    ];

    // vider les champs
    public function resetFields()
    {
        $this->immatriculation = '';
        $this->num_chassis = '';
        $this->marque = '';
        $this->couleur = '';
        $this->kilometrage = '';
        $this->type_id = null;
        $this->section_id = null;
        $this->intervalle = '';
    }


    // realtime validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount(){
        $var = Mobile::find($this->ids);

        $this->immatriculation = $var->immatriculation;
        $this->num_chassis = $var->num_chassis;
        $this->marque = $var->marque;
        $this->couleur = $var->couleur;
        $this->anneefabrication = $var->anneefabrication;
        $this->kilometrage = $var->kilometrage;
        $this->type_id = $var->type_id;
        $this->section_id = $var->section_id;
        $this->intervalle = $var->intervalle;

    }
    public function update(){
        $this->validate();
        Mobile::whereId($this->ids)->update([
            'immatriculation' => ucfirst(trans($this->immatriculation)),
            'num_chassis' => ucfirst(trans($this->num_chassis)),
            'marque' => ucfirst(trans($this->marque)),
            'couleur' => ucfirst(trans($this->couleur)),
            'kilometrage' => $this->kilometrage,
            'intervalle' => $this->intervalle,
            'type_id' => $this->type_id,
            'section_id' => $this->section_id
        ]);

        $this->dispatchBrowserEvent('ok', [
            'message'=>'<b>Succ??s</b><br/><span style="color: #2d3354; ">Avocat modifi??</span>',
        ]);
    }
    public function render()
    {
        $types = Type_Mobile::all();
        $sections = Section::all();
        return view('livewire.mobile.modify-mobile', ['types' => $types], ['sections' => $sections]);
    }
}
