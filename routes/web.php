<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| aca definimos las rutas de la pagina web
*/
//personal-site.com=>Welcome
//personal-site.com/contacto=>contact
//personal-site.com/blog=>blog
//personal-site.com/about=>about


//EL ORDEN DE LAAS RUTAS ES MUUUUYYYY IMPORTANTE
Route::view('/','welcome')->name('home');
Route::view('/contact','contact')->name('contact');
Route::get('/blog',[PostController::class,'index'])->name('blog');
Route::get('/blog/create',[PostController::class,'create'])->name('posts.create');
Route::post('/blog',[PostController::class,'store'])->name('posts.store');
Route::get('/blog/{post}',[PostController::class,'show'])->name('posts.show');
Route::get('/blog/{post}/edit',[PostController::class,'edit'])->name('posts.edit');
Route::patch('/blog/{post}',[PostController::class,'update'])->name('posts.update');
Route::delete('/blog/{post}',[PostController::class,'destroy'])->name('posts.destroy');

Route::view('/about','about')->name('about');
Route::view('/login','auth.login')->name('login');
Route::post('/login',[AuthenticatedSessionController::class,'store']);
Route::post('/logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');
Route::view('/register','auth.register')->name('register');
Route::post('/register',[RegisteredUserController::class,'store']);


