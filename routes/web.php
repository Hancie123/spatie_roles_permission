<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use App\Models\User;

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



Route::get('/',function(){
        return view('login');
})->name('login');

Route::get('/register',function(){
    return view('register');
});

Route::post('/login',[AuthenticatedSessionController::class,'store']);
Route::post('/register',[RegisteredUserController::class,'store']);

Route::get('/dashboard',function(){
    $roles=Role::all();
    $myrole=auth()->user()->getRoleNames();


    return view('dashboard',compact('roles','myrole'));
})->middleware('auth',"role:user");

