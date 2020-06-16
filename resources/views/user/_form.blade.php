<?php

use App\Models\UserRole;

/* @var  $model \App\Models\User */

?>

<?= Form::open(['url' => $url]); ?>

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title"><?= $this->title; ?></h2>
    </div>
    <div class="card-body">
        <?php if(@$model->hasErrors()) { ?>
        <div class="alert alert-danger">
            Mohon untuk memperbaiki kesalahan berikut ini<br><br>
            <ul>
                <?php foreach(@$model->getErrors() as $error) { ?>
                <li><?= $error; ?></li>
                <?php } ?>
            </ul>
        </div>
        <?php } ?>


        <div class="form-group">
            <?= Form::label('username', 'Username', ['class' => 'control-label']); ?>
            <?= Form::text('username', $model->username, ['class'=>'form-control']); ?>
        </div>

        <?php if($model->id==null) { ?>
        <div class="form-group">
            <?= Form::label('password', 'Password', ['class' => 'control-label']); ?>
            <?= Form::password('password', ['class'=>'form-control']); ?>
        </div>
        <?php } ?>

        <?php if($model->id_user_role == UserRole::UNIT) { ?>
        <div class="form-group">
            <?= Form::label('id_unit', 'Unit', ['class' => 'control-label']); ?>
            <?= Form::text('id_unit', $model->id_unit, ['class'=>'form-control']); ?>
        </div>
        <?php } ?>

        <?= Form::hidden('referrer', $referrer); ?>
        <?= Form::hidden('process', 1); ?>
    </div>

    <div class="card-footer">
        <?= Form::submit('Kirim', ['class'=>'btn btn-success btn-flat']); ?>
    </div>
</div>

<?= Form::close(); ?>
