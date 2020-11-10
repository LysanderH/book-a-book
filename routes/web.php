<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\StudentOrderController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsStudent;
use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Resource_;

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

Route::prefix('admin')->middleware(['auth', IsAdmin::class])->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/send-mail', function () {
        return view('admin.send-reminder-mail');
    })->name('send-mail');
    // Book -> resources (add, remove, display, update)
    // Season -> resources
    // Order (list, remove, add?)
    // Text -> resources
    // list payments (Order with User, StatusChange, Status
});
Route::middleware(['auth', IsStudent::class])->group(function () {
    // Home
    Route::get('/', [StudentDashboardController::class, 'index'])->name('dashboard');

    Route::get('/books', function () {
        return view('user.books');
    });
    Route::get('/books/{book}', function () {
        return view('user.book');
    });

    Route::resource('/orders', StudentOrderController::class);
});


//->middleware('auth');

// Register step two

// Register step three

// Check group when last-login is < then created_at season

// Book list

// Orders make new order (lists all selected books from book list), see orders
