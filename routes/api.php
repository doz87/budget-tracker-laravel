<?php

use App\Http\Controllers\TagController;
use App\Http\Controllers\TransactionCategoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
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

Route::group(['middleware' => []], function() {
   Route::apiResource('users', 'UserController');
   Route::apiResource('tags', 'TagController');
   Route::apiResource('transactions', 'TransactionController');
   Route::apiResource('transaction_categories', 'TransactionCategoryController');
   Route::post('import', 'ImportController@store')->name('import.store');
});
