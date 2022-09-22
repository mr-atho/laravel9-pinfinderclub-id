<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index()
    {
        $products = DB::table('products')->get();

        return view('product/v_products', ['products' => $products]);
    }

    function product_detail(Request $request, $id)
    {
        $product_array = DB::table('products')->where('id', $id)->get();

        return view('product/v_product_detail', ['product_array' => $product_array]);
    }
}
