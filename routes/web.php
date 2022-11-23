<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HowController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::resource('homes', HomeController::class);
Route::get('/', HomeController::class)->name('home');
// Route::get('homes/{home}', [HomeController::class, 'show'])->name('homes.show');

Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::resource('challenges', ChallengeController::class);
Route::get('sources', SourceController::class, 'index');
Route::get('hows', [HowController::class, 'index']);
Route::get('templates', [TemplateController::class, 'index']);
Route::resource('cards', CardController::class);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/resources', function () {
    return view('resources.index');
})->middleware(['auth', 'verified'])->name('resources');

Route::get('/dashboard/solution', function () {
    return view('solution.index');
})->middleware(['auth', 'verified'])->name('solution');

Route::get('/dashboard/unlock', function () {
    return view('unlock.index');
})->middleware(['auth', 'verified'])->name('unlock');

Route::get('/dashboard/users', function () {
    return view('users.index');
})->middleware(['auth', 'verified'])->name('users');

Route::get('/dashboard/templates', function () {
    return view('templates.index');
})->middleware(['auth', 'verified'])->name('templates');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';