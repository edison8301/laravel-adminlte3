<?php

use Illuminate\Support\Facades\Schema;

$modelName = str_replace('_', ' ',$table);
$modelName = ucwords($modelName);
$modelName = str_replace(' ', '', $modelName);

$urlName = str_replace('_', '-', $table);

?>

Route::get('/<?= $urlName; ?>', '<?= $modelName; ?>Controller@index');
Route::get('/<?= $urlName; ?>/index', '<?= $modelName; ?>Controller@index')->name('<?= $urlName; ?>.index');
Route::get('/<?= $urlName; ?>/read', '<?= $modelName; ?>Controller@read')->name('<?= $urlName; ?>.read');
Route::get('/<?= $urlName; ?>/create', '<?= $modelName; ?>Controller@create')->name('<?= $urlName; ?>.create');
Route::post('/<?= $urlName; ?>/create', '<?= $modelName; ?>Controller@create')->name('<?= $urlName; ?>.create');
Route::get('/<?= $urlName; ?>/update', '<?= $modelName; ?>Controller@update')->name('<?= $urlName; ?>.update');
Route::post('/<?= $urlName; ?>/update', '<?= $modelName; ?>Controller@update')->name('<?= $urlName; ?>.update');
Route::get('/<?= $urlName; ?>/delete', '<?= $modelName; ?>Controller@delete')->name('<?= $urlName; ?>.delete');
