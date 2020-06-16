<?php

/* @var  $model \App\Models\UserRole */

?>

<?= Form::open(['route' => $route]); ?>

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
            <?= Form::label('id', 'Id', ['class' => 'control-label']); ?>
            <?= Form::text('id', $model->id, ['class'=>'form-control']); ?>
        </div>
                
        <div class="form-group">
            <?= Form::label('nama', 'Nama', ['class' => 'control-label']); ?>
            <?= Form::text('nama', $model->nama, ['class'=>'form-control']); ?>
        </div>
        
        <?= Form::hidden('referrer', $referrer); ?>
    </div>

    <div class="card-footer">
        <?= Form::submit('Kirim', ['class'=>'btn btn-success btn-flat']); ?>
    </div>
</div>

<?= Form::close(); ?>