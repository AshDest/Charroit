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

    public function delete(){
        $var=Section::whereId($this->iddelete)->delete();
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

    public function alertsupr($id){
        $this->iddelete = $id;
    }

    public function reload(){
        $refresh;
    }
    public function render()
    {
        $sections = Section::all();
        return view('livewire.section.sections', ['sections' => $sections]);
    }
}
