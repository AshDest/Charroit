<?php

namespace App\Http\Livewire\Section;

use App\Models\Section;
use Livewire\Component;
use Livewire\WithPagination;

class Sections extends Component
{
    use WithPagination;


    public $perpage = 4;

    public $iddelete = NULL;
    public $selbyname = NULL;
    public $selbypriority = NULL;

    public $designation;

    public $updates=false;

    public $search;

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

    public function save()
    {
        $this->validate();
        try {
            Section::create([
                'designation' => ucfirst(trans($this->designation)),
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
        $var=Section::whereId($id)->delete();
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
        $var = Section::find($id);
        $this->ids = $id;
        $this->designation = $var->designation;
    }
    public function updates(){
        $this->validate();
        Section::whereId($this->ids)->update([
            'designation' => ucfirst(trans($this->designation))
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
    public function render()
    {
        return view('livewire.section.sections', [
            'sections' => Section::where(
            'designation',
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
