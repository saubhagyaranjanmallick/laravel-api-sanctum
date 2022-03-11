<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




//public routes
  Route::get('/students',[StudentController::class,'index']);

   Route::get('/students/{id}',[StudentController::class,'show']);
   
   Route::post('/students',[StudentController::class,'store']);
   
   Route::post('/students/{id}',[StudentController::class,'update']);
   
   Route::delete('/students/{id}',[StudentController::class,'destroy']);
   
   Route::get('/students/search/{city}',[StudentController::class,'search']);


//protected routes



?>