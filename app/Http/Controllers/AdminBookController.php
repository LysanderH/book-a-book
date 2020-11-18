<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $books = Book::with('orders.season', 'media', 'seasons')->whereHas('orders.season', function ($season) {
        //     return $season->active();
        // })->get();

        // SELECT * FROM `orders` JOIN book_order ON book_order.order_id = orders.id JOIN books ON book_order.book_id = books.id WHERE season_id = 2 AND draft = 0 ORDER BY `book_order`.`book_id` ASC 

        // $books = Book::select('*')
        $books = Book::select('books.id as id', 'books.title as title', 'books.stock')
            ->withBookQuantity()
            ->leftJoin('book_order', 'books.id', '=', 'book_id')
            ->leftJoin('orders', 'book_order.book_id', '=', 'orders.id')
            ->leftJoin('seasons', 'orders.season_id', '=', 'seasons.id')
            ->leftJoin('media', 'media.model_id', '=', 'books.id')
            ->where('orders.draft', '=', false)
            ->where('orders.season_id', '=', function ($query) {
                $query->select('seasons.id')->from('seasons')->orderByDesc('seasons.id')->take(1);
            })
            ->groupBy('book_id')
            ->get();

        return $books;

        // $books = DB::select('SELECT * FROM `orders` JOIN book_order ON book_order.order_id = orders.id JOIN books ON book_order.book_id = books.id WHERE season_id = 2 AND draft = 0 ORDER BY `book_order`.`book_id` ASC ');
        // dd($books);
        // dd($books);
        // foreach ($books as $book) {
        //     dump($book);
        // }
        // die();
        return view('admin.books.index', ['books' => $books, 'user' => $request->user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.books.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
