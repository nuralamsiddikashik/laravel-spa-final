<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
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
    Route::post( '/add-category', [CategoryController::class, 'addCategory'] )->name( 'category.add' );
    Route::get( '/category-list', [CategoryController::class, 'categoryList'] )->name( 'category.list' );
    Route::get( 'edit/{id}', [CategoryController::class, 'categoryEdit'] )->name( 'category.edit' );
    Route::patch( 'update/{id}', [CategoryController::class, 'categoryUpdate'] )->name( 'category.update' );
    Route::delete( 'delete/{id}', [CategoryController::class, 'categoryDelete'] )->name( 'category.delete' );

} );

Route::post( 'login', [LoginController::class, 'login'] )->name( 'login' );
Route::post( 'logout', [LoginController::class, 'logout'] )->middleware( 'auth:sanctum' );

// Public Controller
Route::post( '/add-contact', [ContactController::class, 'addContact'] )->name( 'add.contact' );
