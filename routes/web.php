<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    $data=App\Models\Task::all();

    return view('tasks')->with('tasks', $data);
});


Route::post('/saveTask', [TaskController::class, 'store']);

//action button route
Route::get('/markascompleted/{id}',[TaskController::class, 'UpdateTaskAsCompleted']);

//action button state
Route::get('/markasnotcompleted/{id}',[TaskController::class, 'UpdateTaskAsNotCompleted']);

//delete task 
Route::get('/deletetask/{id}', [TaskController::class, 'DeleteTask']);

//update task view
Route::get('/updatetask/{id}', [TaskController::class, 'UpdateTaskView']);


//update task view
Route::post('/updatetasks', [TaskController::class, 'UpdateTasks']);