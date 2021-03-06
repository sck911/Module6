<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/* ===================  Upload Image Controller ============================= */
use App\Http\Controllers\ImageUploadController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

/* =========================== These routes to create different profiles, pictures ======================== */
Route::get('/profile/create', [App\Http\Controllers\ProfileController::class, 'create']);
Route::post('/profile/postCreate', [App\Http\Controllers\ProfileController::class, 'postCreate'])->name('profile.postCreate');
Route::get('/profile/edit', [App\Http\Controllers\ProfileController::class, 'edit']);
Route::post('/profile/{id}/postEdit', [App\Http\Controllers\ProfileController::class, 'postEdit'])->name('profile.postEdit');




Route::resource('post', App\Http\Controllers\PostController::class);


/* =================================== logout function ====================== */
Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
 });


/* =============================== to get to Weather route ======================================================== */
Route::get('/weatherlive', [App\Http\Controllers\weatherController::class, 'weather'])->name('weatherlive');
