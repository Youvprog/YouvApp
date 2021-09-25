<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\entrepriseController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\registerUser;

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

Route::get('/', function () {
    return view('auth.Login2');
});
Route::get('/comptabledash',function () { return view('comptabledash');})->name('compt');
Route::get('/infoENP',function () { return view('infoENP');})->name('IENP');
Route::post('infoENP',[entrepriseController::class,'addData']);



Route::post('addemp',[EmpController::class, 'store']);
Route::get('listemployé',[EmpController::class,'show'])->name("listuser");
Route::get('supprimer/{id}',[EmpController::class,'destroy']);
Route::get('/addemployé', function(){ return view('addemployé');})->name('adduser');

Route::get('modifierE/{id}',[EmpController::class,'index']);



Route::post('modifierE',[EmpController::class,'update']);

Route::get('/register',function(){
    return view('auth.register')->name('register');
});


Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

//Admin routes
Route::get('/AddUsers',function() { return view('Admin.AddUsers');})->name('utilisateur');
Route::get('Admin.ListeUsers',[registerUser::class,'show'])->name('UserList');


   

Route::get('/register',function() { return view('auth.register');})->name('regis');

Route::post('addUser',[registerUser::class,'store']);

Route::get('/traitementPaie',[EmpController::class,'showTrait'])->name('TP');

require __DIR__.'/auth.php';
