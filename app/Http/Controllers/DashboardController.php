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
        if(Session::isAdmin()) {
            return redirect(url('/dashboard/admin'));
        }

        return abort(404);
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
