<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\InventoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('signin');
});

Route::middleware('guest')->group(function ()
{
    Route::get('sign-in', [AuthController::class, 'signin'])->name('signin');
    Route::post('sign-in', [AuthController::class, 'signinaction']);
});

Route::middleware('auth')->group(function ()
{
    Route::get('sign-out', [AuthController::class, 'signout'])->name('signout');
    Route::get('inventory', [InventoryController::class, 'index'])->name('inventory');
    Route::get('inventory/edit/{id}', [InventoryController::class, 'edit'])->name('inventory.edit');
    Route::post('inventory/edit/{id}', [InventoryController::class, 'editAction']);
    Route::get('inventory/data', [InventoryController::class, 'dataInventory'])->name('inventory.data');
});
