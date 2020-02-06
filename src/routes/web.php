<?php
Route::get('temp', 'Hcode\Template\Http\Controllers\TemplateController@index');
Route::get('template', function () {
    return 'Hola mundo';
});