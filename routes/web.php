<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::get( '/', function () {
    return view( 'welcome' );
} );
Route::any( '{any}', function () {
    return view( 'welcome' );
} )->where( ['any' => '^((?!app).)*$'] );

Route::get( '/app', [AdminController::class, 'index'] )->name( 'admin' );
// Route::any( '{any}', [AdminController::class, 'index'] )->where( 'any', '.*' );

// Route::get( '/', function () {
//     return view( 'welcome' );
// } );
// Route::any('{any}', function () {
//     return view('welcome');
// })->where('any', '.*');

// Route::get( '/app', [AdminController::class, 'index'] )->name( 'admin' );
// Route::any( '{any}', [AdminController::class, 'index'] )->where( 'any', '.*' );