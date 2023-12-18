<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleHistoryController extends Controller
{
    public function index()
    {
       
        $sales = DB::table('sales')
            ->select('id', 'created_at','product_id', 'quantity_sold', 'price_per_unit', 'total_amount') 
            ->orderByDesc('created_at') 
            ->get();

        return view('salehistory.index', compact('sales'));
    }
}
