<?php

namespace App\Http\Livewire;

use App\Models\Entretien;
use App\Models\Garage;
use App\Models\Mobile;
use App\Models\Section;
use App\Models\Type_Mobile;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;


    public $perpage = 4;
    public $sections;
    public $entretiens;
    public $mobiless;
    public $garages;

    public $test;
    // public $mobiles;
    public function mount()
    {
        $this->sections = Section::count();
        $this->entretiens = Entretien::count();
        $this->mobiless = Mobile::count();
        $this->garages = Garage::count();
    }
    public function render()
    {
        return view('livewire.dashboard', [
            'mobiles' => Mobile::orderBy('created_at', 'DESC')
            ->paginate($this->perpage),
            'mobileskms' => Mobile::orderBy('kilometrage', 'DESC')
            ->paginate($this->perpage),
        ]);
    }
}
