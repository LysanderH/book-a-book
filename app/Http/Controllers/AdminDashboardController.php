<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sortOrder = (bool) $request->sortOrder ?? false;

        $sortingArray = [
            'student' => 'user.lastname',
            'topay' => 'total',
            'books' => function ($order) {
                return count($order->books);
            },
            'status' => function ($order) {
                return $order->current_status->id;
            }
        ];

        if ($request->currentSort === $request->sort && isset($request->sort)) {
            $sortOrder = !$sortOrder;
            $currentSort = $request->currentSort;
        } else {
            $currentSort = $request->sort;
        }


        $orders = Order::with('statuses', 'season', 'user.media', 'books')->final()->whereHas('season', function ($season) {
            return $season->active();
        })->get()->sortBy($sortingArray[$request->sort ?? 'status'], SORT_REGULAR, $sortOrder);


        /**
         * Custom pagination
         * 
         * Solves the problem with orders current_status accessor
         */
        $totalCount = $orders->count();
        $itemsPerPage = 10;

        $page = $request->page ?: 1;
        if ($page) {
            $skip = $itemsPerPage * ($page - 1);
            $orders = $orders->take($itemsPerPage * $page)->skip($skip);
        } else {
            $orders = $orders->take($itemsPerPage)->skip(0);
        }

        $parameters = $request->getQueryString() ?? 'page=1';
        $parameters = preg_replace('/&page(=[^&]*)?|^page(=[^&]*)?&?/', '', $parameters);
        $path = '?' . $parameters;
        $categories = $orders->toArray();

        $paginator = new \Illuminate\Pagination\LengthAwarePaginator($categories, $totalCount, $itemsPerPage, $page);
        $paginator = $paginator->withPath($path);


        $statuses = Status::all();

        $expenditures = $orders->sum(function ($order) {
            return $order->total;
        });

        $receips = 0;

        $receips = $orders->sum(function ($order) {
            if ($order->statuses->last()->name !== 'commandé') {
                return $order->total;
            }
        });

        // $pageQuery = '';
        // if ($request->page) {
        $pageQuery = '&currentSort=' . ($currentSort ?? 'status') . '&sortOrder=' . $sortOrder . '&page=' . $request->page;
        // }

        return view('admin.dashboard', [
            'orders' => $orders,
            'statuses' => $statuses,
            'expenditures' => $expenditures,
            'receips' => $receips,
            'pageQuery' => $pageQuery,
            'paginator' => $paginator
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
