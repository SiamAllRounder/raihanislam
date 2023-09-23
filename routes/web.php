<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterAdminController;
use App\Http\Controllers\MasterAdminLoginController;
use App\Http\Controllers\YourController;

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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::middleware(['web'])->group(function () {
    Route::post('/your-endpoint', [YourController::class, 'yourMethod']);

});

Route::get('/dashboard', [MasterAdminController::class, 'show'])->name('dashboard')->middleware('admindabtestsentry');
Route::get('/masterlogin', [MasterAdminLoginController::class, 'show'])->name('masterlogin');

Route::post('/login', [MasterAdminLoginController::class, 'login']);

Route::get('/sessionsetter', [MasterAdminController::class, 'sessionsetter']);
Route::get('/sessionremover', [MasterAdminController::class, 'sessionremover'])->name('removesession');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/seo-course', function () {
    return view('seo-course');
})->name('seo-course');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
