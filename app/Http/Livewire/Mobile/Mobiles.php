<?php

namespace App\Http\Livewire\Mobile;

use App\Models\Mobile;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Mobiles extends Component
{
    use WithPagination;


    public $perpage = 4;

    public $search;

    public $iddelete = NULL;
    public $selbyname = NULL;
    public $selbypriority = NULL;

    public function delete(){
        $var=Mobile::whereId($this->iddelete)->delete();
        if($var){
            $this->dispatchBrowserEvent('ok', [
                'message'=>'<b>Succès</b><br/><i>Suppresion effectuee</i>',
            ]);
            $refresh;
        }else{
            $this->dispatchBrowserEvent('fail', [
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
        // $mobiles = Mobile::all();

        if( $this->search != NULL){
            return view('livewire.mobile.mobiles', [
                'mobiles' => Mobile::where('immatriculation', 'like', '%'.$this->search.'%')
                                        ->orWhere('num_chassis', 'like', '%'.$this->search.'%')
                                        ->orWhere('marque', 'like', '%'.$this->search.'%')
                                        ->orWhere('couleur', 'like', '%'.$this->search.'%')
                                        ->paginate($this->perpage),
            ]);
        }
        else{
            return view('livewire.mobile.mobiles', [
                'mobiles' => Mobile::orderBy('created_at', 'DESC')
                                ->paginate($this->perpage),
            ]);
        }
        // elseif( $this->filterByOrder != NULL AND $this->filterByOrder == 'A-Z' ){
        //     return view('livewire.mobile.mobiles', [
        //         'avocats' => Mobile::orderBy(DB::raw("CONCAT(`marque`)"), 'ASC')
        //                         ->paginate($this->perpage),
        //     ]);
        // }elseif( $this->filterByOrder != NULL AND $this->filterByOrder == 'Z-A'){
        //     return view('livewire.configuration.avocat.list-avocat', [
        //         'avocats' => Mobile::orderBy(DB::raw("CONCAT(`nom`, ' - ',`postnom`,' ',`prenom`)"), 'DESC')
        //                         ->paginate($this->perpage),
        //     ]);
        // }else{
        //     return view('livewire.configuration.avocat.list-avocat', [
        //         'avocats' => Mobile::orderBy('created_at', 'DESC')
        //                         ->paginate($this->perpage),
        //     ]);
        // }

        // return view('livewire.mobile.mobiles', ['mobiles' => $mobiles]);
    }
}
