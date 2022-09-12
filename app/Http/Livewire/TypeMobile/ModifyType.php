<?php

namespace App\Http\Livewire\TypeMobile;

use App\Models\Type_Mobile;
use Livewire\Component;

class ModifyType extends Component
{
    public $designation;
    public $id;

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

    public function mount(){
        $var = Type_Mobile::find($this->id);
        $this->designation = $var->nom;
    }
    public function update(){
        $this->validate();
        Type_Mobile::whereId($this->id)->update([
            'designation' => ucfirst(trans($this->designation))
        ]);

        $this->dispatchBrowserEvent('ok', [
            'message'=>'<b>Succès</b><br/><span style="color: #2d3354; ">Avocat modifié</span>',
        ]);
    }
    public function render()
    {
        return view('livewire.type-mobile.modify-type');
    }
}
