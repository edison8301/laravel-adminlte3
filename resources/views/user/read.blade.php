<?php

$this->title = 'Tambah User';

/* @var  $model \App\Models\User */

?>

@extends($layout)

@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h2 class="card-title"><?= $this->title; ?></h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">

                <tr>
                    <th style="width: 180px">Id</th>
                    <td><?= $model->id ?></td>
                </tr>

                <tr>
                    <th style="width: 180px">Name</th>
                    <td><?= $model->name ?></td>
                </tr>

                <tr>
                    <th style="width: 180px">Email</th>
                    <td><?= $model->email ?></td>
                </tr>

                <tr>
                    <th style="width: 180px">Email Verified At</th>
                    <td><?= $model->email_verified_at ?></td>
                </tr>

                <tr>
                    <th style="width: 180px">Username</th>
                    <td><?= $model->username ?></td>
                </tr>

                <tr>
                    <th style="width: 180px">Password</th>
                    <td><?= $model->password ?></td>
                </tr>

                <tr>
                    <th style="width: 180px">Remember Token</th>
                    <td><?= $model->remember_token ?></td>
                </tr>

                <tr>
                    <th style="width: 180px">Status Aktif</th>
                    <td><?= $model->status_aktif ?></td>
                </tr>

                <tr>
                    <th style="width: 180px">User Role</th>
                    <td><?= $model->id_user_role ?></td>
                </tr>

                <tr>
                    <th style="width: 180px">Unit</th>
                    <td><?= $model->id_unit ?></td>
                </tr>

                <tr>
                    <th style="width: 180px">Created At</th>
                    <td><?= $model->created_at ?></td>
                </tr>

                <tr>
                    <th style="width: 180px">Updated At</th>
                    <td><?= $model->updated_at ?></td>
                </tr>

            </table>
        </div>
        <div class="card-footer">
            <?= $model->getLinkUpdateButton(); ?>
            <?= $model->getLinkIndexButton(); ?>
        </div>
    </div>

@endsection
