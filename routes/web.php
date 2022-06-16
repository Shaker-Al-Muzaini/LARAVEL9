<?php

use App\Http\Controllers\mycontroller;
use App\Http\Controllers\Studends\studendController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',static function () {
    return view('welcome');
});
Route::Get('test', static function (){
    return view('p1');
});

Route::Get('man', static function(){
    return view('Profile.man',['name'=>'Shaker','family'=>'Almazini',
        'coress'=>['php','flutter','dart','laravel']]);
});
Route::get('testCon',[mycontroller::class,'get_my_name']);
Route::get('st/{id}/p',[mycontroller::class,'get_id']);
Route::get('studend_create',[studendController::class,'create']);
Route::post('studend_store',[studendController::class,'store']);
Route::get('studend',[studendController::class,'index']);
Route::get('studend_edit{id}',[studendController::class,'edit']);
Route::post('studend_upDate{id}',[studendController::class,'update']);
Route::post('studend_delete{id}',[studendController::class,'destroy']);
