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

    public function delete(){
        $var=Type_Mobile::whereId($this->iddelete)->delete();
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
        $typesmobiles = Type_Mobile::all();
        return view('livewire.type-mobile.type-mobiles', ['typesmobiles' => $typesmobiles]);
    }
}
