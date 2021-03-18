<?php

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

Route::get('/testing-api', function() {
    return ['message' => 'hello'];
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// PROJECT API ROUTES
Route::get('/project', 'ProjectAPIController@projectList');
Route::post('/project', 'ProjectAPIController@createProject');
Route::post('/createProject', 'ProjectAPIController@createProject'); 
/* Fail safe, incase Laravel gets confused with /project (POST) route. but is MVC standard*/
Route::get('/remove/project/{id}', 'ProjectAPIController@removeProject');
Route::get('/project/{id}', 'ProjectAPIController@projectDetail');

