<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection\toSql;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $stores =Store::all();
        return view('store',compact('stores'));
    }

    public function search(Request $request){

        $search = $request->search;
        $lastdate = date("Y-m-d", strtotime($search));
        $search1 = date('Y-m-d', strtotime("-3 months", strtotime($lastdate)));

        $stores=DB::table('orders as o')
        ->join('products as p', 'o.product_id', '=', 'p.id')
        ->join('stores as s', 'o.store_id', '=', 's.id')
        ->select(
            'o.store_id',
            'p.category_id',
            DB::raw('SUM(o.quantity * o.unit_price) AS total_sales_amount'),
            DB::raw('RANK() OVER (PARTITION BY o.store_id ORDER BY SUM(o.quantity * o.unit_price) DESC) as sales_rank')
        )
        ->whereBetween('o.order_date', ["$search1","$lastdate"])
        ->groupBy('o.store_id', 'p.category_id')
        ->orderBy('o.store_id')
        ->orderBy('total_sales_amount', 'DESC')
        ->get();
    return view('store',compact('stores','search'));

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
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        //
    }
}
