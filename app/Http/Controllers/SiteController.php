<?php


namespace App\Http\Controllers;


use App\Components\Session;

class siteController extends Controller
{
    public $layout = 'layouts.frontend.app';

    public function index()
    {
        return view('site.index',[
            'layout' => $this->layout
        ]);
    }

    public function admin()
    {
        if(Session::isAdmin()==false) {
            return redirect(url('/dashboard/index'));
        }

        return view('dashboard.admin',[
            'layout' => $this->layout
        ]);
    }
}
