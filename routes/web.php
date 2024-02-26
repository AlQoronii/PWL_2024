<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'welcome']);

// Route::get('/user/{name}', function ($name){
//     return 'Nama saya '.$name;
// });


Route::get('/posts/{post}/comments/{comment}',[WelcomeController::class,'postComment']);


Route::get('/articles/{id}', [WelcomeController::class,'article']);


Route::get('/goldarah/{gol?}', function($gol='O'){
    return 'Golongan Darah Anda - '.$gol;
});

Route::get('/user/{name?}', [WelcomeController::class,'DisName']);

Route::get('/user/profile', function(){
 return 'User/profile berubah menjadi profile ';
})->name('profile');

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/articles/{id}', [ArticleController::class,'articles']);

Route::resource('photos', PhotoController::class)->only(['index','show']);

Route::resource('photos', PhotoController::class)->except(['create','store','update','destroy']);

Route::get('/greeting', [WelcomeController::class,'greeting']);
