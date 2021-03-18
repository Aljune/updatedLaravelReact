<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TestController;
use App\Models\Project;


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

Route::get('/testing-api', function() {
    return ([
        'name' => 'Ajune',
        'title' => 'MyProject',
        'age' => '226',
        'email' => 'degamoaljune14.com',
        'address' => 'cebu',
     ]);
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('projects', ProjectController::class);

Route::get('profiles', 'App\Http\Controllers\ProfilesController@list');

// Route::get('test', 'App\Http\Controllers\TestController@index');

Route::get('/test', function () {
    return new TestController(Project::all());
});
Route::get('/test/{id}', function ($id) {
    return new TestController(Project::findOrFail($id));
});

