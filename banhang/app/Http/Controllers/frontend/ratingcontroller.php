<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ratingcontroller extends Controller
{
    public function add(Request $request)
    {
        $stars_rated = $request->input('rating-oke');
        $product_id = $request->input('product_id');

        $product_check = Product::where('ma', $product_id)->where('status', '0')->first;
        if ($product_check) {
            $verified_purchase = Order::where('orders.user_id',);
        }
    }

    //
}