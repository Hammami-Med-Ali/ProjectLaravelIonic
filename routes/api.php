<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\User;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/user/{id}','App\Http\Controllers\UserController@showbyid');
Route::get('/user/name/{name}','App\Http\Controllers\UserController@showbyname');

Route::post('/produit','App\Http\Controllers\ProduitController@create');
Route::get('/produits', 'App\Http\Controllers\ProduitController@show');
Route::get('/produit/{id}', 'App\Http\Controllers\ProduitController@showbyid');
Route::put('/produitupdate/{id}', 'App\Http\Controllers\ProduitController@update');
Route::delete('/produitdelete/{id}', 'App\Http\Controllers\ProduitController@delete');
Route::get('/produit', 'App\Http\Controllers\ProduitController@index');

Route::post('/register','App\Http\Controllers\UserController@register');
Route::post('/login','App\Http\Controllers\UserController@login');