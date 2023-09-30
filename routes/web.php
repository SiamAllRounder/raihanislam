<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterAdminController;
use App\Http\Controllers\MasterAdminLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\YourController;
use App\View\Components\HomePageBrandImageManagerModalBox;
use Illuminate\Http\Request;

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

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
 
    $token = csrf_token();
    echo $token;
 
    // ...
});

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/test-component-route', [HomePageBrandImageManagerModalBox::class, 'test']);
Route::post('/upload-brand-image', [HomePageBrandImageManagerModalBox::class, 'imageUpload'])->name('upload-brand-image');


Route::post('/your-endpoint', [YourController::class, 'yourMethod']);

Route::post('/update-hero-text-left', [MasterAdminController::class, 'hero_text_left_updater'])->name('update-hero-text-left')->middleware('admindabtestsentry');

// Route::middleware(['web'])->group(function () {
//     Route::post('/your-endpoint', [YourController::class, 'yourMethod']);

// });

Route::get('/dashboard', [MasterAdminController::class, 'show'])->name('dashboard')->middleware('admindabtestsentry');
Route::get('/dashboard/footer-text-editor', [MasterAdminController::class, 'footer_text_editor'])->name('footer-text-editor')->middleware('admindabtestsentry');
Route::post('/dashboard/footer-text-editor', [MasterAdminController::class, 'footer_text_editor'])->name('footer-text-editor')->middleware('admindabtestsentry');
Route::get('/masterlogin', [MasterAdminLoginController::class, 'show'])->name('masterlogin');

Route::post('/login', [MasterAdminLoginController::class, 'login']);
Route::get('/logout', [MasterAdminLoginController::class, 'logout'])->name('logout');

Route::get('/sessionsetter', [MasterAdminController::class, 'sessionsetter']);
Route::get('/sessionremover', [MasterAdminController::class, 'sessionremover'])->name('removesession');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/seo-course', function () {
    return view('seo-course');
})->name('seo-course');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
