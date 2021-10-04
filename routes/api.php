<?php

use App\Task;
use Illuminate\Http\Request;


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

Route::get('tasks', function(Request $request) {
    return Task::all();
}); // mostrar todos los valores de la bd

Route::get('tasks/{id}', function($id) {
    return Task::find($id); //mostrar un valor especifico
});

Route::post('tasks', function(Request $request) {
    return Task::create($request->all());  //almacenar valores en bd
});

Route::delete('tasks/{id}', function($id) {
    Task::find($id)->delete();
    return 204; //borrar registro
});

Route::put('tasks/{id}', function(Request $request, $id) {
    $task = Task::findOrFail($id);
    $task->update($request->all());
    return $task;
}); //actualizar registro
