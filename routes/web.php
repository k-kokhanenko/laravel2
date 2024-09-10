<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\GroupController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('groups', controller: GroupController::class);


Route::get('/groups/{groupId}/students/create', action: [GroupController::class, 'getStudents']);
Route::get('/groups/{groupId}/students/{studentId}', action: [GroupController::class, 'getStudent']);

Route::post('/groups/{groupId}/students', action: [GroupController::class, 'createStudents']);
