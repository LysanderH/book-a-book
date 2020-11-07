<?php

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

Route::domain('admin.myapp.com')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });

    // Book -> resources (add, remove, display, update)
    // Season -> resources
    // Order (list, remove, add?)
    // Text -> resources
    // list payments (Order with User, StatusChange, Status
});

Route::get('/books', function () {
    return view('user.books');
});

// Home
Route::get('/', function () {
    return view('user.dashboard');
});

//->middleware('auth');

// Register step two

// Register step three

// Check group when last-login is < then created_at season

// Book list

// Orders make new order (lists all selected books from book list), see orders
