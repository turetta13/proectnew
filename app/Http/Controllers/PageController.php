<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Database;
use App\Product;
use App\Article;
use App\Order;
use App\Orders_to_product;
use App\Category;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function acc()
    {
        return view('account');
    }

    public function check()
    {
        return view('checkout');
    }

    public function contact()
    {
        return view('contact');
    }

    public function products()
    {
        $products = \App\Product::where('publish',1);
        return view ('products',[
            'product'=>$products, 'products'=>Product::paginate(7)
        ]);

           }

    public function single()
    {
        return view('single');
    }

    public function sup()
    {
        return view('support');
    }

    public function team()
    {
        return view('team');
    }

    public function pay()
    {
        return view('pay');
    }

    public function delivery()
    {
        return view('delivery');
    }

    public function faq()
    {
        return view('faq');
    }

        public function cat($slug)
    {
       $category =  \App\Category::where([
            'slug'=>$slug
        ])->first();
        // dd($category->name);
        return view('index');
    }
}