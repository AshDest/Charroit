<?php

namespace App\Http\Livewire\Prelevement;

use App\Models\Prelevement;
use Livewire\Component;
use Livewire\WithPagination;

class Prelevements extends Component
{
    use WithPagination;


    public $perpage = 4;

    public $iddelete = NULL;
    public $selbyname = NULL;
    public $selbypriority = NULL;

    public function delete(){
        $var=Prelevement::whereId($this->iddelete)->delete();
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
        return view('livewire.prelevement.prelevements', [
            'prelevements' => Prelevement::orderBy('created_at', 'DESC')
            ->paginate($this->perpage),
        ]);
    }
}
