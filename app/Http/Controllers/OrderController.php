<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection\toSql;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $stores =Order::all();
        return view('index',compact('stores'));
    }

    public function search(Request $request){

        $search = $request->search;
        $search1=(string)"$search-01-01";
        $lastdate=(string)"$search-12-31";

        //dd( 
        $stores = DB::table('orders as o')
        ->select(
            DB::raw('YEAR(o.order_date) as year'),
            DB::raw('MONTH(o.order_date) as month'),
            's.region_id',
            DB::raw('SUM(o.quantity * o.unit_price) as total_sales_amount'),
            DB::raw('COUNT(o.id) as number_of_orders')
        )
        ->join('stores as s', 'o.store_id', '=', 's.id')
        ->whereBetween('o.order_date',["$search1","$lastdate"])
        ->groupBy('year', 'month', 's.region_id')
        ->orderBy('year')
        ->orderBy('month')
        ->orderBy('s.region_id')
        ->get();
        //->toSql());
        return view('index',compact('stores','search'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
