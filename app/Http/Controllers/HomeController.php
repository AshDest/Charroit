<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.dashboard');
    }

    public function type()
    {
        return view('pages.Type_automobile');
    }
    public function section()
    {
        return view('pages.section');
    }
    public function garage()
    {
        return view('pages.garage');
    }
    public function mobile()
    {
        return view('pages.mobile.mobiles');
    }
    public function addmobile()
    {
        return view('pages.mobile.addmobile');
    }

    public function modifymobile($ids)
    {
        return view('pages.mobile.modifymobile', compact('ids'));
    }

    public function entretien()
    {
        return view('pages.entretien.entretien');
    }

    public function addentretien()
    {
        return view('pages.entretien.addentretien');
    }

    public function modifyentretien($ids)
    {
        return view('pages.entretien.modifyentretien', compact('ids'));
    }

    public function user(){
        return view('pages.user');
    }

    public function prelevement()
    {
        return view('pages.prelevement.prelevement');
    }
    public function addprelevement()
    {
        return view('pages.prelevement.addprelevement');
    }
    public function modifyprelevement($ids)
    {
        return view('pages.prelevement.modifyprelevement', compact('ids'));
    }

}
