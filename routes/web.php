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

});
Route::get('/index',[staticController::class,'index'])->name('home.index');
Route::get('/menu',[staticController::class,'menu'])->name('home.menu');
Route::resource('dishes',DishescController::class);
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/store/{category?}/{items?}', function ($category=null,$items=null) {
//     if(isset($category)){
//         if(isset($items)){
//         return "<h1>{$items}</h1>";   
//         }
//         return "<h1>{$category}</h1>";
//     }return '<h1>store</h1>';
    
// });
// Route::get('/about', function () {
//     $filter =request('style');
//     if(isset($filter)){
//         return 'this page is for <span style="color : red">'.strip_tags($filter).'</span>';
//     }
//     return 'this page is for <span style="color : red">All products</span>';
    
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
