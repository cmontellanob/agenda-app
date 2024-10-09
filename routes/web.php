<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('agenda', AgendaController::class);
