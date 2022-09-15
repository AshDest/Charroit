<?php

namespace App\Http\Livewire;

use App\Models\Mobile;
use App\Models\Type_Mobile;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;


    public $perpage = 4;
    public $types;
    // public $mobiles;
    public function mount()
    {
        // $this->types = Type_Mobile::all();
    }
    public function render()
    {
        return view('livewire.dashboard', [
            'mobiles' => Mobile::orderBy('created_at', 'DESC')
            ->paginate($this->perpage),
        ]);
    }
}
