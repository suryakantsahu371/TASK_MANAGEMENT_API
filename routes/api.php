<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TaskController;

// Route::get('/test', function () {
//     return "API working";
// });

route::post('/register',[AuthController::class,'register']);
route::post('/login',[AuthController::class,'login']);

route::middleware('auth:sanctum')-> group(function(){

      route::apiResource('projects',ProjectController::class);
      route::apiResource('tasks', TaskController::class);
}); 

