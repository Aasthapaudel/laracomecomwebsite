<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

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

Route::get('/home', function () {
    $products=Product::all();
    return view('theme.home',compact('products'));
})->middleware(['auth']);

Route::get('/',[HomeController::class,'index']);
// Route::get('register',[HomeController::class,'register']);
Route::get('about',[HomeController::class,'about'])->middleware(['auth']);
Route::get('contact',[HomeController::class,'contact'])->middleware(['auth']);
Route::get('checkout',[HomeController::class,'checkout'])->middleware(['auth']);
Route::get('shop_details',[HomeController::class,'shop_details'])->middleware(['auth']);
// Route::get('login',[HomeController::class,'login']);
Route::get('Shopping',[HomeController::class,'Shopping'])->middleware(['auth']);
Route::get('Shop',[HomeController::class,'Shop'])->middleware(['auth']);


Route::resource('products', ProductController::class)->middleware(['auth']);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
