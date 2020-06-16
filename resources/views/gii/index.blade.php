<?php

use Illuminate\Support\Facades\Schema;

$allColumn = Schema::getColumnListing($table);
$modelName = str_replace('_', ' ',$table);
$modelName = ucwords($modelName);
$titleName = $modelName;
$modelName = str_replace(' ','', $modelName);

print "<?php";

?>


$this->title = 'Daftar <?= $titleName; ?>';

/* @var $gridView \App\Components\GridView */

<?= "?>"; ?>


<?= '@extends($layout)'; ?>


<?= '@section(\'content\')'; ?>


    <?= "<?php"; ?> if ($message = Session::get('success')) { <?= "?>" ?>

        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong><?= "<?="; ?> $message <?= "?>"; ?></strong>
        </div>
    <?= '<?php '; ?> } <?= "?>"; ?>


    <div class="card card-primary">
        <div class="card-header">
            <h2 class="card-title"><?= "<?="; ?> $this->title; <?= "?>"; ?></h2>
        </div>
        <div class="card-body">
            <div style="overflow: auto">
                <div style="">
                    <?= "<?="; ?> $gridView->pageDisplay(); <?= "?>"; ?>

                </div>
                <table class="table table-bordered table-condensed">
                    <tr>
                        <th style="width: 50px;">No</th>
                        <?php foreach($allColumn as $column) { ?>
                        <?php
                        $columnName = str_replace('id_', '', $column);
                        $columnName = str_replace('_', ' ', $columnName);
                        $columnName = ucwords($columnName);
                        ?>

                        <th style="text-align: center;">
                            <?= $columnName; ?>

                        </th>
                        <?php } ?>

                        <th style="width: 100px"></th>
                    </tr>

                    <?= "<?php"; ?>

                        $i = $gridView->startNumber();
                    <?= "?>"; ?>

                    <?= "<?php"; ?> foreach($gridView->get() as $data) { <?= "?>"; ?>

                    <tr>
                        <td style="text-align: center"><?= "<?="; ?> $i; ?></td>
                        <?php foreach($allColumn as $column) { ?>

                        <td style="text-align: center;">
                            <?= "<?="; ?> $data-><?= $column; ?> <?= "?>"; ?>

                        </td>
                        <?php } ?>

                        <td style="text-align: center">
                            <?= "<?="; ?> $data->getLinkReadIcon(); <?= "?>"; ?>

                            <?= "<?="; ?> $data->getLinkUpdateIcon(); <?= "?>"; ?>

                            <?= "<?="; ?> $data->getLinkDeleteIcon(); <?= "?>"; ?>

                        </td>
                    </tr>
                    <?= "<?php"; ?> $i++; } ?>
                </table>
            </div>
            <div style="">
                <?= "<?="; ?> $gridView->pageNav(); ?>
            </div>
        </div>
    </div>

<?= '@endsection'; ?>
