<?php

namespace App\Http\Livewire\Entretien;

use App\Models\Entretien;
use App\Models\Garage;
use App\Models\Mobile;
use Livewire\Component;

class ModifyEntretien extends Component
{
    public $garage_id;
    public $mobile_id;
    public $date_entretien;
    public $entretien;
    public $cout;

    public $ids;

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
    public function mount(){
        $var = Entretien::find($this->ids);

        $this->garage_id = $var->garage_id;
        $this->mobile_id = $var->mobile_id;
        $this->date_entretien = $var->date_entretien;
        $this->entretien = $var->entretien;
        $this->cout = $var->cout;
    }

    public function update(){
        $this->validate();
        Entretien::whereId($this->ids)->update([
            'garage_id' => $this->garage_id,
            'mobile_id' => $this->mobile_id,
            'date_entretien' => $this->date_entretien,
            'entretien' => $this->entretien,
            'cout' => $this->cout,
        ]);

        $this->dispatchBrowserEvent('ok', [
            'message'=>'<b>Succès</b><br/><span style="color: #2d3354; ">Avocat modifié</span>',
        ]);
    }
    public function render()
    {
        $mobiles = Mobile::all();
        $garages = Garage::all();
        return view('livewire.entretien.modify-entretien', ['mobiles' => $mobiles], ['garages' => $garages]);
    }
}
