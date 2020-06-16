<?php

use App\Components\Helper;use App\Unit;use App\UsulanKomponen;use App\UsulanOutput;$this->title = 'Dashboard Tahun 2021';

?>


@extends($layout)

@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h2 class="card-title">
                Usulan
            </h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>
                                1
                            </h3>
                            <p>Data 1</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-file"></i>
                        </div>
                        <a href="<?= url('/usulan-komponen/matriks') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>
                                2
                            </h3>

                            <p>Data 2</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-file"></i>
                        </div>
                        <a href="<?= url('/usulan-komponen/matriks'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="small-box bg-orange">
                        <div class="inner">
                            <h3 style="color: #ffffff">
                                3
                            </h3>

                            <p style="color: #ffffff">Data 3</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-file"></i>
                        </div>
                        <a href="<?= url('/usulan-komponen/matriks-perubahan'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- .card-body -->
    </div>

@stop
