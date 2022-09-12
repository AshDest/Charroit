<?php

namespace App\Http\Livewire\TypeMobile;

use App\Models\Type_Mobile;
use Livewire\Component;

class AddType extends Component
{
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
    public function render()
    {
        return view('livewire.type-mobile.add-type');
    }
}
