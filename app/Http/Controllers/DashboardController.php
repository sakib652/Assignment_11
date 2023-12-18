<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $todaySales = Sale::whereDate('created_at', now())->sum('total_amount');
    $yesterdaySales = Sale::whereDate('created_at', now()->subDay())->sum('total_amount');
    $thisMonthSales = Sale::whereMonth('created_at', now())->sum('total_amount');
    $lastMonthSales = Sale::whereMonth('created_at', now()->subMonth())->sum('total_amount');

    return view('dashboard.index', compact('todaySales', 'yesterdaySales', 'thisMonthSales', 'lastMonthSales'));
}
}
