<?php


namespace App\Http\Controllers;


use App\Components\Session;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Session::isUnit()) {
            return redirect(url('/dashboard/unit'));
        }

        return view('dashboard.index',[
            'layout' => $this->layout
        ]);
    }

    public function unit()
    {
        if(Session::isUnit()==false) {
            return redirect(url('/dashboard/index'));
        }

        return view('dashboard.unit',[
            'layout' => $this->layout
        ]);
    }
}
