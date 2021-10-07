<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mathcad;
use App\Http\Controllers\SocialController;
//use Auth;

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/question',function () {
//     return view('question');
// });


Route::get('/',[Mathcad::class,'homePage']);

Route::get('/question', [Mathcad::class,'question']);
Route::get('/add', [Mathcad::class,'add']);
Route::post('/store', [Mathcad::class,'store']);
Route::get('editQ/{id}', [Mathcad::class,'editQuestion']);
Route::post('updateQ/{id}', [Mathcad::class,'updateQuestion']);
Route::get('/deleteQ/{id}', [Mathcad::class,'deleteQuestion']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/allQuestion', [Mathcad::class, 'allQuestion']);
    Route::get('/add', [Mathcad::class, 'add']);
});


//social login Route::

Route::get('login/facebook', [SocialController::class, 'fackbookRedirect']);
Route::get('login/facebook/callback', [SocialController::class, 'loginWithOutFB']);

Route::get('login/github', [SocialController::class, 'githubRedirect']);
Route::get('login/github/callback', [SocialController::class, 'loginWithOutGit']);

