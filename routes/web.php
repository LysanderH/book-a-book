<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminBookController;
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


// TODO Si l'utilisateur n'a pas de foto de profil montrer cette vue
Route::get('/register-add-profile-picture', function () {
    return view('auth.profile-picture');
})->middleware('auth');

Route::prefix('admin')->middleware(['auth', IsAdmin::class])->group(function () {
    // Route to display all orders
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard.index');
    // TODO route to delete order

    /**
     * Route to send payment reminder mail
     * 1. View to display all users who didn't pay so the user can choose who will get the mail
     * 2. Display and change email content
     * 3. Send mail
     */
    Route::get('/send-mail', function () {
        return view('admin.send-reminder-mail');
    })->name('send-mail');

    // Display all seasons
    Route::get('/seasons', function () {
        return view('admin.seasons.index');
    })->name('seasons.index');

    // Display all books of one season
    Route::get('/seasons/{id}', function () {
        return view('admin.seasons.show');
    })->name('seasons.show');

    // Create a new season
    Route::get('/seasons/create', function () {
        return view('admin.seasons.create');
    })->name('seasons.create');

    // Display all books with there stock and there number of orders
    Route::get('/books', [AdminBookController::class, 'index'])->name('books.index');

    // Create a new book
    Route::get('/books/create', [AdminBookController::class, 'create'])->name('books.create');

    // Display a book
    Route::get('/books/{id}', [AdminBookController::class, 'show'])->name('books.show');

    // Display all texts
    Route::get('/texts', function () {
        return view('admin.texts.index');
    })->name('texts.index');
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
