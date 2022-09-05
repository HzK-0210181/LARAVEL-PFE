<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\OrderController;
<<<<<<< HEAD
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\ZoneController;
use Illuminate\Support\Facades\Route;
=======
use App\Http\Controllers\CarTypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\CommentController;
// CommentController
// use Illuminate\Support\Facades\Route;
>>>>>>> 2c1d119 (laravel backend api)
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
<<<<<<< HEAD
=======
/*
3ndk had routes hadu li mafihumsh dik auth:sanctum , t9d t accessehum bla token 
mzyan 
*/

>>>>>>> 2c1d119 (laravel backend api)
Route::post('register', [UserController::class, 'register']);
Route::get('validated/{id}', [UserController::class, 'validated']);
Route::get('delete/{id}', [UserController::class, 'deleted']);
Route::post('login', [UserController::class, 'login']);

<<<<<<< HEAD
Route::post('/', [OrderController::class, 'reserve']);
=======

Route::get('/data', [OrderController::class, 'index']);
Route::post('/reserve', [OrderController::class, 'reserve']);
Route::post('comment', [OrderController::class, 'comment']);
>>>>>>> 2c1d119 (laravel backend api)
//PROTECTED ROUTES

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::prefix('admin')->group(function () {
<<<<<<< HEAD
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
=======
        Route::post('/dashboard', [AdminController::class, 'index']);
        Route::controller(WorkerController::class)->group(function () {
            Route::put('/edit_user', 'edit_user');
            Route::post('/add_user', 'add_user');
            Route::delete('/delete_user', 'delete_user');
        });
        Route::controller(ServiceController::class)->group(function () {
            Route::get('services','index');
            Route::post('add_service','add_service');
            Route::delete('delete_service','delete_service');
        });
        Route::controller(CarTypeController::class)->group(function () {
            Route::get('cartypes','index');
            Route::post('add_cartype','add_cartype');
            Route::delete('delete_cartype','delete_cartype');
        });
        Route::controller(ZoneController::class)->group(function () {
            Route::post('/add_zone', 'adding_zone');
            Route::delete('/delete_zone', 'deleting_zone');
        });
        Route::controller(OrderController::class)->group(function(){
            Route::put('orders/{id}', 'edit_order');
        });
        Route::delete('delete_comment',[CommentController::class,'delete']);
        Route::get('/logout', [AdminController::class, 'logout']);
>>>>>>> 2c1d119 (laravel backend api)
    });
});
Route::middleware(['auth:sanctum', 'worker'])->group(function () {
    Route::prefix('worker')->group(function () {
        Route::get('/dashboard', [WorkerController::class, 'index']);
        Route::post('/logout', [WorkerController::class, 'logout']);
    });
});
<<<<<<< HEAD
=======
// hahia khdama db jrb gae aba omar
>>>>>>> 2c1d119 (laravel backend api)
