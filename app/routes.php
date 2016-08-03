<?php
Route::controller('cliente','ClientesController');

Route::get('/', function() {
    return View::make('hello');
});
