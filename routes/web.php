<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


Route::get('/form', [FormController::class , 'index']  );
Route::post('/store', [FormController::class , 'store']  );

Route::get('/create', [FormController::class , 'create']  );
