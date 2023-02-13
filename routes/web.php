<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\staticController;

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

})->name('welcome');
Route::get('/index',[staticController::class,'index'])->name('home.index');
Route::get('/menu',[staticController::class,'menu'])->name('home.menu');
Route::resource('dishes',DishescController::class);
Route::resource('landing_page',landingPage::class);
 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
