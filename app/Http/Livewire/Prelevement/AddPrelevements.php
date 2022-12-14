<?php

namespace App\Http\Livewire\Prelevement;

use App\Models\Mobile;
use App\Models\Prelevement;
use Livewire\Component;

class AddPrelevements extends Component
{
    public $kilometre;
    public $mobile_id;
    public $dateprelevement;

    public $km;
    public $intervalle;

    public $rest_km;

    protected $rules = [
        'mobile_id' => 'required',
        'kilometre' => 'required',
        'dateprelevement' => 'required',
    ];

    protected $messages = [
        'kilometre.required' => 'ce Champ est obligatoire',
        'mobile_id.required' => 'ce Champ est obligatoire',
        'dateprelevement.required' => 'ce Champ est obligatoire',
    ];

    // vider les champs
    public function resetFields()
    {
        $this->kilometre = null;
        $this->mobile_id = null;
        $this->dateprelevement = null;
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
            $var = Mobile::select('kilometrage', 'rest_km')->where('id', $this->mobile_id)->first();
            $this->km = $var->kilometrage;
            $this->rest_km = $var->rest_km;
            if ($this->km <= $this->kilometre) {
                Prelevement::create([
                    'mobile_id' => $this->mobile_id,
                    'kilometre' => $this->kilometre,
                    'dateprelevement' => $this->dateprelevement,
                ])->save();
                // Set Flash Message
                Mobile::whereId($this->mobile_id)->update([
                    'kilometrage' => $this->kilometre,
                    'rest_km' => $this->rest_km - ($this->kilometre - $this->km),
                ]);
                $this->dispatchBrowserEvent('ok', [
                    'message' => '<b>Succès</b><br/><span style="color: #2d3354; ">enregistré</span>',
                ]);
                $this->resetFields();
            }else {
                $this->dispatchBrowserEvent('info', [
                    'message' => "Veuillez mettre le kilometrage valide! "
                ]);
            }

        } catch (\Exception $e) {
            // Set Flash Message
            $this->dispatchBrowserEvent('fail', [
                'message' => "Quelque chose ne va pas lors de l'enregistrement'!! " . $e->getMessage()
            ]);
            // Reset Form Fields After Creating departement
            $this->resetFields();
        }
    }
    public function render()
    {
        $mobiles = Mobile::all();
        return view('livewire.prelevement.add-prelevements', ['mobiles' => $mobiles]);
    }
}
