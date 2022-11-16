<?php
use App\Http\Controllers\OutdoorController;
use Illuminate\Support\Facades\Route;


Route::get('/', [OutdoorController::class, 'index']);

Route::post('/save-products', [OutdoorController::class,'saveProducts'])-> name("saveProducts");

Route::get('/delete/{id}',[OutdoorController::class,'deleteProducts']);

Route::get('edit/{id}',[OutdoorController::class,'editProducts']);

Route::post('edit',[OutdoorController::class,'updateProducts'])-> name("updateProducts");
