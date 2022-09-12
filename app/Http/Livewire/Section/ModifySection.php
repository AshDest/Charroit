<?php

namespace App\Http\Livewire\Section;

use App\Models\Section;
use Livewire\Component;

class ModifySection extends Component
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
        $var = Section::find($this->id);
        $this->designation = $var->designation;
    }
    public function update(){
        $this->validate();
        Section::whereId($this->id)->update([
            'designation' => ucfirst(trans($this->designation))
        ]);

        $this->dispatchBrowserEvent('ok', [
            'message'=>'<b>Succès</b><br/><span style="color: #2d3354; ">Avocat modifié</span>',
        ]);
    }
    public function render()
    {
        return view('livewire.section.modify-section');
    }
}
