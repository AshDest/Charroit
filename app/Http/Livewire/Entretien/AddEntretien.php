<?php

namespace App\Http\Livewire\Entretien;

use App\Models\Entretien;
use App\Models\Garage;
use App\Models\Mobile;
use Livewire\Component;

class AddEntretien extends Component
{
    public $garage_id;
    public $mobile_id;
    public $date_entretien;
    public $entretien;
    public $kilometre;
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
        $this->garage_id = null;
        $this->mobile_id = null;
        $this->date_entretien = null;
        $this->entretien = '';
        $this->cout = '';
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
            // $var = Mobile::select('rest_km')->where('id', $this->mobile_id)->first();
            // $this->rest_km = $var->rest_km;
            Entretien::create([
                'garage_id' => $this->garage_id,
                'mobile_id' => $this->mobile_id,
                'date_entretien' => $this->date_entretien,
                'entretien' => $this->entretien,
                'cout' => $this->cout,
            ])->save();

            if ($this->kilometre) {
                Mobile::whereId($this->mobile_id)->update([
                    'rest_km' =>$this->kilometre,
                ]);
            }
            // Set Flash Message
            $this->dispatchBrowserEvent('ok', [
                'message' => '<b>Succès</b><br/><span style="color: #2d3354; ">enregistré</span>',
            ]);
            $this->resetFields();
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
        $garages = Garage::all();
        return view('livewire.entretien.add-entretien', ['mobiles' => $mobiles], ['garages' => $garages]);
    }
}
