<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FserviceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
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

Route::middleware( ['auth:sanctum'] )->group( function () {
    Route::get( '/user', function ( Request $request ) {
        return $request->user();
    } );
    Route::post( '/app/add-category', [CategoryController::class, 'addCategory'] )->name( 'category.add' );
    Route::get( '/app/category-list', [CategoryController::class, 'categoryList'] )->name( 'category.list' );
    Route::get( '/app/edit/{id}', [CategoryController::class, 'categoryEdit'] )->name( 'category.edit' );
    Route::patch( '/app/update/{id}', [CategoryController::class, 'categoryUpdate'] )->name( 'category.update' );
    Route::delete( '/app/delete/{id}', [CategoryController::class, 'categoryDelete'] )->name( 'category.delete' );

    // Service Route
    Route::post( '/app/add-service', [FserviceController::class, 'addServiceForHomePage'] )->name( 'service.add' );
    Route::get( '/app/service-list', [FserviceController::class, 'showServiceListForHome'] )->name( 'service.list' );
    Route::get( '/app/edit-service/{id}', [FserviceController::class, 'editServiceItem'] )->name( 'service.edit' );
} );

Route::post( '/app/login', [LoginController::class, 'login'] )->name( 'login' );
Route::post( 'logout', [LoginController::class, 'logout'] )->middleware( 'auth:sanctum' );

// Public Controller
Route::post( '/add-contact', [ContactController::class, 'addContact'] )->name( 'add.contact' );
Route::get( 'service-list', [HomeController::class, 'showServiceList'] )->name( 'front.service.list' );