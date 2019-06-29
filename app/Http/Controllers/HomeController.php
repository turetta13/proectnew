<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Database;
use App\Product;
use App\Article;
use App\Order;
use App\Orders_to_product;
use App\Category;


class HomeController extends Controller
{
    public function getArticles()
    {
        $articles = Article::all();
        return;
    }

    public function index()
    {
        $user = \Auth::user();
        return view('home', ['user' => $user]);

    }
}
