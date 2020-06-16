<?php

$this->title = 'Daftar User Role';

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
            <h2 class="card-title"><?= $this->title; ?></h2>
        </div>
        <div class="card-body">
            <div style="overflow: auto">
                <div style="">
                    <?= $gridView->pageDisplay(); ?>
                </div>
                <table class="table table-bordered table-condensed">
                    <tr>
                        <th style="width: 50px;">No</th>
                                                
                        <th style="text-align: center;">
                            Id
                        </th>
                                                
                        <th style="text-align: center;">
                            Nama
                        </th>
                        
                        <th style="width: 100px"></th>
                    </tr>

                    <?php
                        $i = $gridView->startNumber();
                    ?>
                    <?php foreach($gridView->get() as $data) { ?>
                    <tr>
                        <td style="text-align: center"><?= $i; ?></td>
                        
                        <td style="text-align: center;">
                            <?= $data->id ?>
                        </td>
                        
                        <td style="text-align: center;">
                            <?= $data->nama ?>
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