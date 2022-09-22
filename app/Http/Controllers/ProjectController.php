<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    function index()
    {
        $products = DB::table('products')->where('sale_price', '!=', null)->get();

        return view('index', ['products' => $products]);
    }
}
