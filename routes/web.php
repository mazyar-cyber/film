<?php

use App\Http\Controllers\admin\AdminImdbController;
use App\Http\Controllers\admin\AdminNotificationController;
use App\Http\Controllers\admin\AdminSerialController;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\AdminVIPPackController;
use App\Http\Controllers\front\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\VipPackController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::resource('/', MainController::class);

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.layouts.master');
    });
    Route::resource('imdb', AdminImdbController::class);
    Route::resource('user', AdminUserController::class);
    Route::resource('serial', AdminSerialController::class);
    Route::resource('vippack', AdminVIPPackController::class);
    Route::resource('notification', AdminNotificationController::class);
    Route::delete('deleteSelectedIMDbRecord', [AdminImdbController::class, 'deleteSelected'])->name('imdb.selectedDel');
    Route::delete('deleteSelectedSerialRecord', [AdminSerialController::class, 'deleteSelected'])->name('serial.selectedDel');
    Route::delete('deleteSelectedUserRecord', [AdminUserController::class, 'deleteSelected'])->name('user.selectedDel');
    Route::delete('deleteSelectedVIPPackRecord', [AdminVIPPackController::class, 'deleteSelected'])->name('vippack.selectedDel');
    Route::delete('deleteSelectedNotoficationRecord', [AdminNotificationController::class, 'deleteSelected'])->name('notofication.selectedDel');
    Route::post('sendApiToIMDB', [AdminImdbController::class, 'sendApi'])->name('send.api.imdb');
    Route::post('sendApiToImdbForSerial', [AdminSerialController::class, 'sendApi'])->name('send.api.serial');
});

Route::resource('vippack', VipPackController::class);
Route::post('checkForPay', [VipPackController::class, 'checkForPay'])->name('checkFor.pay');

Route::get('callback', [VipPackController::class, 'callback']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
