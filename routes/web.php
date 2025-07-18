<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\WarehouseController;
use App\Livewire\ItemTable;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('items', ItemController::class);
Route::resource('warehouses', WarehouseController::class);

Route::resource('brands', BrandController::class);
Route::resource('categories', CategoryController::class);

Route::get('/items-live', ItemTable::class);

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

