<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\VisitorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/getvisitor',[VisitorController::class, 'GetVisitorDetails']);
/*Contact Page route*/
Route::post('/postcontact',[ContactController::class, 'PostContactDetail']);

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
