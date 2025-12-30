<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('admin')->group(function () {
    Route::get('/add_category', function () {
        return view('admin.addcategory');
    })->name('admin.addcategory');
    Route::post('/addcategory', [AdminController::class, 'addCategory'])->name('admin.addCategoryData');
    Route::get('/viewcategory', [AdminController::class, 'viewCategory'])->name('admin.viewcategory');
    Route::get('/deleteCategory/{id}', [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory');
    Route::get('/editCategory/{id}', [AdminController::class, 'editCategory'])->name('admin.editCategory');
    Route::post('/updateCategory/{id}', [AdminController::class, 'updateCategoryData'])->name('admin.updateCategoryData');

});

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login');
});

require __DIR__.'/auth.php';
