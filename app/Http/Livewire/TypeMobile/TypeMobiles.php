<?php

namespace App\Http\Livewire\TypeMobile;

use App\Models\Type_Mobile;
use Livewire\Component;
use Livewire\WithPagination;

class TypeMobiles extends Component
{
    use WithPagination;


    public $perpage = 4;

    public $iddelete = NULL;
    public $selbyname = NULL;
    public $selbypriority = NULL;

    public $designation;

    protected $rules = [
        'designation' => 'required',
    ];

    protected $messages = [
        'designation.required' => 'la designation est obligatoire',
    ];

    // vider les champs
    public function resetFields()
    {
        $this->designation = '';
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
            Type_Mobile::create([
                'designation' => ucfirst(trans($this->designation)),
            ])->save();
            // Set Flash Message
            $this->dispatchBrowserEvent('ok', [
                'message' => '<b>Succès</b><br/><span style="color: #2d3354; ">Avocat enregistré</span>',
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

    public function delete()
    {
        $var = Type_Mobile::whereId($this->iddelete)->delete();
        if ($var) {
            $this->dispatchBrowserEvent('ok', [
                'message' => '<b>Succès</b><br/><i>Suppresion effectuee</i>',
            ]);
            $refresh;
        } else {
            $this->dispatchBrowserEvent('ok', [
                'message' => '<b>Désoler</b><br/><i>Echèc de suppression</i>',
            ]);
            $refresh;
        }
    }

    public function alertsupr($id)
    {
        $this->iddelete = $id;
    }

    public function reload()
    {
        $refresh;
    }
    public function render()
    {
        $typesmobiles = Type_Mobile::all();
        return view('livewire.type-mobile.type-mobiles', ['typesmobiles' => $typesmobiles]);
    }
}
