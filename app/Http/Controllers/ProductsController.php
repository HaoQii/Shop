<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /*
     * where('on_sale',true)筛选出on_sale字段为true的记录，这样未上架的商品就不会被展示出来。
     * paginate()分页取出数据。
     */
    public function index(Request $request)
    {
        $products = Product::query()->where('on_sale',true)->paginate(16);

        return view('products.index',['products'=>$products]);
    }
}
