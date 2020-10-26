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

Route::domain('admin.myapp.com')->middleware('auth')->group(function () {
    // dashboard (Order
    Route::get('', function () {
        return view('admin.dashboard');
    });

    // Add book
    // Season -> resources
    // Book -> resources (add, remove, display, update)
    // Order (list, remove, add?)
    // Text -> resources
    // list payments (Order with User, StatusChange, Status
});

// Home
Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

// Register step two

// Register step three

// Check group when last-login is < then created_at season

// Book list

// Orders add order (lists all selected books from book list), see orders

