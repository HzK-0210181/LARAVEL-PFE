<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\ZoneController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//PUBLIC ROUTES
Route::post('register', [UserController::class, 'register']);
Route::get('validated/{id}', [UserController::class, 'validated']);
Route::get('delete/{id}', [UserController::class, 'deleted']);
Route::post('login', [UserController::class, 'login']);

Route::post('/', [OrderController::class, 'reserve']);
//PROTECTED ROUTES

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index']);
        Route::controller(WorkerController::class)->group(function () {
            Route::post('/edit', 'edit_worker');
            Route::post('/delete', 'delete_worker');
            Route::get('/orders', 'show_orders_by_worker');
        });
        Route::controller(ZoneController::class)->group(function () {
            Route::post('/assign_zone', 'assign_zone');
            Route::post('/add_zone', 'adding_zone');
            Route::post('/delete_zone', 'deleting_zone');
        });
        Route::controller(GroupController::class)->group(function () {
            Route::post('/add_group', 'adding_group');
            Route::post('/delete_group', 'deleting_group');
        });
        Route::post('/logout', [AdminController::class, 'logout']);
    });
});
Route::middleware(['auth:sanctum', 'worker'])->group(function () {
    Route::prefix('worker')->group(function () {
        Route::get('/dashboard', [WorkerController::class, 'index']);
        Route::post('/logout', [WorkerController::class, 'logout']);
    });
});
