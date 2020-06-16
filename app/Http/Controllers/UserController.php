<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use App\Components\GridView;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $id_user_role = $request->get('id_user_role');

        $query = User::query([
            'id_user_role' => $id_user_role
        ]);

        $gridView = new GridView([
            'page' => $request->get('page'),
            'query' => $query,
            'count'=> $query->count(),
            'url' => '/user/index'
        ]);

        return view('user.index',[
            'layout' => $this->layout,
            'gridView' => $gridView,
            'id_user_role' => $id_user_role
        ]);
    }

    public function read(Request $request)
    {
        $id = $request->get('id');
        $model = User::findOrFail($id);

        return view('user.read',[
            'layout' => $this->layout,
            'model' => $model
        ]);
    }

    public function create(Request $request)
    {
        $model = new User();

        $model->id_user_role = $request->get('id_user_role');

        $referrer = URL::previous();

        if($request->post('process') AND $model->loadAttributes($request->all())) {

            $referrer = $request->input('referrer');

            $model->password = Hash::make($model->password);

            if($model->save()) {
                return redirect($referrer)->with('success','Data berhasil disimpan');
            }
        }

        return view('user.create',[
            'layout' => $this->layout,
            'model' => $model,
            'referrer' => $referrer,
            'id_user_role' => $request->get('id_user_role')
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->get('id');
        $model = User::findOrFail($id);

        $referrer = URL::previous();

        if($request->post('process') AND $model->loadAttributes($request->all())) {

            $referrer = $request->input('referrer');

            $model->password = Hash::make($model->password);

            if($model->save()) {
                return redirect($referrer)->with('success','Password berhasil direset');;
            }
        }

        return view('user.update',[
            'layout' => $this->layout,
            'model' => $model,
            'referrer' => $referrer
        ]);
    }

    public function delete(Request $request)
    {
        $id = $request->get('id');
        $model = User::findOrFail($id);

        if($model->delete()) {
            return redirect(URL::previous())->with('success','Data berhasil dihapus');
        } else {
            return redirect(URL::previous())->with('error','Data GAGAL dihapus');
        }
    }

    public function resetPassword(Request $request)
    {
        $id = $request->get('id');
        $model = User::findOrFail($id);

        $referrer = URL::previous();

        if($request->post('process') AND $model->loadAttributes($request->all())) {

            $referrer = $request->input('referrer');

            if($model->save()) {
                return redirect($referrer)->with('success','Data berhasil disimpan');;
            }
        }

        return view('user.reset-password',[
            'layout' => $this->layout,
            'model' => $model,
            'url' => \App\Components\Helper::url([
                '/user/reset-password',
                'id'=>$id
            ]),
            'referrer' => $referrer
        ]);
    }
}
