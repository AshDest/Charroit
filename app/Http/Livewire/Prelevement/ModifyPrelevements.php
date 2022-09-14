<?php

namespace App\Http\Livewire\Prelevement;

use App\Models\Mobile;
use App\Models\Prelevement;
use Livewire\Component;

class ModifyPrelevements extends Component
{
    public $kilometre;
    public $mobile_id;
    public $dateprelevement;

    public $lastkm;

    public $ids;
    public $km;

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
    public function mount(){
        $var = Prelevement::find($this->ids);
        $this->mobile_id = $var->mobile_id;
        $this->dateprelevement = $var->dateprelevement;
        $this->kilometre = $var->kilometre;
        $this->lastkm = $var->kilometre;
    }

    public function update(){
        $this->validate();
        $var = Mobile::select('kilometrage')->where('id', $this->mobile_id)->first();
        $this->km = $var->kilometrage;
        // dd(($this->km - $this->lastkm));
        Prelevement::whereId($this->ids)->update([
            'mobile_id' => $this->mobile_id,
            'kilometre' => $this->kilometre,
            'dateprelevement' => $this->dateprelevement,
        ]);
        Mobile::whereId($this->mobile_id)->update([
            'kilometrage' =>($this->km - $this->lastkm) + $this->kilometre,
        ]);
        $this->dispatchBrowserEvent('ok', [
            'message'=>'<b>Succès</b><br/><span style="color: #2d3354; ">Avocat modifié</span>',
        ]);
    }
    public function render()
    {
        $mobiles = Mobile::all();
        return view('livewire.prelevement.modify-prelevements', ['mobiles' => $mobiles]);
    }
}
