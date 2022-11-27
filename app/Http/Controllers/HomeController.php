<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        $report = [
            'view' => 1000,
            'quantity' => 100,
            'inventory' => 1000,
            'summary' => 15000
        ];
        return view('dashboard',[
            'products' => $products,
            'report' => $report
        ]);
    }
}
