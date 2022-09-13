<?php

namespace App\Http\Livewire\Garage;

use App\Models\Garage;
use Livewire\Component;
use Livewire\WithPagination;

class Garages extends Component
{
    use WithPagination;


    public $perpage = 4;

    public $iddelete = NULL;
    public $selbyname = NULL;
    public $selbypriority = NULL;

    public $nomgarage;
    public $contact;
    public $adresse;

    public $updates=false;

    public $search;

    protected $rules = [
        'nomgarage' => 'required',
        'contact' => 'required',
        'adresse' => 'required',
    ];

    protected $messages = [
        'nomgarage.required' => 'La nommination est obligatoire',
        'contact.required' => 'Contact obligatoire',
        'adresse.required' => 'Adresse est obligatoire',
    ];

    // vider les champs
    public function resetFields()
    {
        $this->nomgarage = '';
        $this->contact = '';
        $this->adresse = '';
    }

    public function save()
    {
        $this->validate();
        try {
            Garage::create([
                'nomgarage' => ucfirst(trans($this->nomgarage)),
                'contact' => $this->contact,
                'adresse' => $this->adresse,
            ])->save();
            // Set Flash Message
            $this->dispatchBrowserEvent('ok', [
                'message' => '<b>Succès</b><br/><span style="color: #2d3354; ">Section enregistré</span>',
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

    public function delete($id){
        $var=Garage::whereId($id)->delete();
        if($var){
            $this->dispatchBrowserEvent('ok', [
                'message'=>'<b>Succès</b><br/><i>Suppresion effectuee</i>',
            ]);
            $refresh;
        }else{
            $this->dispatchBrowserEvent('ok', [
                'message'=>'<b>Désoler</b><br/><i>Echèc de suppression</i>',
            ]);
            $refresh;
        }
    }

    public function edit($id){
        $this->updates = true;
        $var = Garage::find($id);
        $this->ids = $id;
        $this->nomgarage = $var->nomgarage;
        $this->contact = $var->contact;
        $this->adresse = $var->adresse;

    }
    public function updates(){
        $this->validate();
        Garage::whereId($this->ids)->update([
            'nomgarage' => ucfirst(trans($this->nomgarage)),
            'contact' => $this->contact,
            'adresse' => $this->adresse,
        ]);
        $this->resetFields();
        $this->dispatchBrowserEvent('ok', [
            'message'=>'<b>Succès</b><br/><span style="color: #2d3354; ">Section modifié</span>',
        ]);
    }

    public function alertsupr($id){
        $this->iddelete = $id;
    }
    public function reload(){
        $refresh;
    }

    public function reload(){
        $refresh;
    }
    public function render()
    {
        return view('livewire.garage.garages', [
            'garages' => Garage::where(
            'nomgarage',
            'LIKE',
            '%' . $this->search . '%'
        )
            ->orWhere(
                'id',
                'LIKE',
                '%' . $this->search . '%'
            )
            ->orderBy('id', 'ASC')->paginate($this->perpage),]);
    }
}
