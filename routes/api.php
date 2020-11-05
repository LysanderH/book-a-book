<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/dashboard', function () {
//    $orders = \App\Models\Order::all()->join('user');
    $users = \App\Models\User::with('orders.books')->get();
//    return $users->first()->orders;
    foreach ($users as $user){
//        dump($user);
        foreach ($user->orders as $order){
            dump($order);
            foreach ($order->books as $book){

                dump($book);
            }
        }
    }
//    return $users->first()->orders->books;
});
