<?php

$this->title = 'Ubah User';

/* @var  $model \App\Models\User */

?>

@extends($layout)

@section('content')

    @include('user._form',[
        'model' => $model,
        'url' => \App\Components\Helper::url(['/user/update', 'id'=>$model->id])
    ])

@endsection
