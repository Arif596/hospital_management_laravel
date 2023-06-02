<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
Use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogDetailController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'varify'=>true
]);

Route::get('/home', [HomeController::class, 'hello'])->middleware('auth','verified');
Route::get('/', [HomeController::class, 'index']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout'); 
Route::get('/add_doctor', [AdminController::class, 'addview']); 
Route::post('/add_doctor', [AdminController::class, 'upload']);
Route::get('/appointment', [HomeController::class, 'view']);
Route::post('/appointment', [HomeController::class, 'appointment']);
Route::get('/my_appointment', [HomeController::class, 'my_appointment']);
Route::get('delete/{id}', [HomeController::class, 'delete']);
Route::get('/showappointment', [AdminController::class, 'showappointment']); 
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/canceled/{id}',[AdminController::class,'canceled']);
Route::get('/showdoctor', [AdminController::class, 'showdoctor']); 
Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);
Route::get('updatedoctor/{id}', [AdminController::class, 'updatedoctor']);
Route::post('updatedoctor/{id}',[AdminController::class,'editdoctor']);
Route::get('/doctors',[DoctorsController::class,'doctor']);
Route::get('/about',[AboutController::class,'about']);
Route::get('/blog',[BlogController::class,'blog']);
Route::get('/contact',[ContactController::class,'contact']);
Route::get('/blogdetail',[BlogDetailController::class,'blogdetail']);