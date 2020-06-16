<?php

use App\Models\UserRole;

$this->title = 'Tambah User '.UserRole::findNamaById($id_user_role);

/* @var  $model \App\Models\User */

?>

@extends($layout)

@section('content')

    @include('user._form',[
        'model' => $model,
        'url' => \App\Components\Helper::url(['/user/create','id_user_role'=>$id_user_role])
    ])

@endsection
