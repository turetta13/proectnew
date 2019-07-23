<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Database;
use App\Product;
use App\Article;
use App\Order;
use App\User;
use App\Orders_to_product;
use App\Category;

class ProductEditController extends Controller
{
    public function adminProducts()
    {
        $products = Product::paginate(10);

        return view('admin.products', ['products' => $products]);
    }
}
