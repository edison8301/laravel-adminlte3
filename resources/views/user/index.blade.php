<?php

use App\Models\UserRole;

$this->title = 'Daftar User '.UserRole::findNamaById($id_user_role);

/* @var  $gridView \App\Components\GridView */

?>

@extends($layout)

@section('content')

    <?php if ($message = Session::get('success')) { ?>
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?= $message ?></strong>
    </div>
    <?php  } ?>

    <div class="card card-primary">
        <div class="card-header">
            <h2 class="card-title">Daftar</h2>
        </div>
        <div class="card-body">
            <div style="margin-bottom: 20px;">
                <?= \App\Components\Html::a('<i class="fa fa-plus"></i> Tambah User', [
                    '/user/create',
                    'id_user_role' => $id_user_role
                ], ['class' => 'btn btn-success btn-flat']) ?>
            </div>

            <div style="overflow: auto">
                <div style="">
                    <?= $gridView->pageDisplay(); ?>
                </div>
                <table class="table table-bordered table-condensed">
                    <tr>
                        <th style="width: 50px;">No</th>

                        <th style="text-align: center;">
                            Username
                        </th>

                        <th style="text-align: center;">
                            User Role
                        </th>

                        <?php if($id_user_role == UserRole::UNIT) { ?>
                        <th style="text-align: center;">
                            Unit
                        </th>
                        <?php } ?>

                        <th></th>

                        <th style="width: 100px"></th>
                    </tr>

                    <?php
                    $i = $gridView->startNumber();
                    ?>
                    <?php foreach($gridView->get() as $data) { ?>
                    <tr>
                        <td style="text-align: center"><?= $i; ?></td>

                        <td style="text-align: left;">
                            <?= $data->username ?>
                        </td>


                        <td style="text-align: center;">
                            <?= @$data->userRole->nama ?>
                        </td>

                        <?php if($id_user_role == UserRole::UNIT) { ?>
                        <td style="text-align: left;">
                            <?= @$data->unit->nama ?>
                        </td>
                        <?php } ?>

                        <td style="text-align: center">
                            <?= \App\Components\Html::a('<i class="fa fa-lock"></i>',[
                                '/user/reset-password',
                                'id'=>$data->id
                            ]); ?>
                        </td>

                        <td style="text-align: center">
                            <?= $data->getLinkReadIcon(); ?>
                            <?= $data->getLinkUpdateIcon(); ?>
                            <?= $data->getLinkDeleteIcon(); ?>
                        </td>
                    </tr>
                    <?php $i++; } ?>
                </table>
            </div>
            <div style="">
                <?= $gridView->pageNav(); ?>
            </div>
        </div>
    </div>

@endsection
