<?php
use App\Models\Coment;
use App\Models\Post;
use App\Http\Controllers\ComentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PostController1;
use App\Http\Auth\Middleware\PostLogin;
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
    return view('welcome');
});
Route::get('/1',[FrontController::class , 'index'])->name('front');
Route::get('/coment', [ComentController::class ,'index'])->name('com_index');
Route::get('/coment/show/{id}', [ComentController::class ,'show'])->name('com_show');
Route::match(['get','post'],'/comet/create', [ComentController::class ,'create'])->name('com_create');

Route::match(['get','post'],'/coment/update/{id}', [ComentController::class ,'update'])->name('com_update');
Route::get('/coment/delete/{id}', [ComentController::class ,'delete'])->name('com_delete');

Route::get('/post', [PostController::class ,'index'])->name('post_index');
Route::get('/post/show/{id}', [PostController::class ,'show'])->name('post_show');
Route::match(['get','post'],'/post/create', [PostController::class ,'create'])->name('post_create')->middleware('PostLogin');
Route::match(['get','post'],'/post/update/{id}', [PostController::class ,'update'])->name('post_update');
Route::get('/post/delete/{id}', [PostController::class ,'delete'])->name('post_delete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
