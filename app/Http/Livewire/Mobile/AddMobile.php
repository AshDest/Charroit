<?php

namespace App\Http\Livewire\Mobile;

use App\Models\Mobile;
use Livewire\Component;

class AddMobile extends Component
{
    public $immatriculation;
    public $num_chassis;
    public $marque;
    public $couleur;
    public $anneefabrication;
    public $kilometrage;
    // public $rest_km;
    // public $nbre_entretien;
    public $intervalle;
    public $type_id;
    public $section_id;

    protected $rules = [
        'immatriculation' => 'required',
        'num_chassis' => 'required',
        'marque' => 'required',
        'couleur' => 'required',
        'anneefabrication' => 'required',
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
        'anneefabrication.required' => 'ce Champ est obligatoire',
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
        $this->anneefabrication = '';
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
    public function save()
    {
        $this->validate();
        try {
            Mobile::create([
                'immatriculation' => ucfirst(trans($this->designation)),
                'num_chassis' => ucfirst(trans($this->designation)),
                'marque' => ucfirst(trans($this->designation)),
                'couleur' => ucfirst(trans($this->designation)),
                'anneefabrication' => $this->anneefabrication,
                'kilometrage' => $this->kilometrage,
                'intervalle' => $this->intervalle,
                'type_id' => $this->type_id,
                'section_id' => $this->section_id
            ])->save();
            // Set Flash Message
            $this->dispatchBrowserEvent('ok', [
                'message' => '<b>Succès</b><br/><span style="color: #2d3354; ">Mobile enregistré</span>',
            ]);
            $this->resetFields();
        } catch (\Exception $e) {
            // Set Flash Message
            $this->dispatchBrowserEvent('fail', [
                'message' => "Quelque chose ne va pas lors de l'enregistrement du Client'!! " . $e->getMessage()
            ]);
            // Reset Form Fields After Creating departement
            $this->resetFields();
        }
    }
    public function render()
    {
        return view('livewire.mobile.add-mobile');
    }
}
