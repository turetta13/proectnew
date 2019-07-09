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
        $products = \App\Product::where('publish', 1);
        return view('products', [
            'product' => $products, 'products' => Product::paginate(7)
        ]);

    }

    public function sup()
    {
        return view('support');
    }

    public function articles($slug)
    {
        $info = Article::where(['slug' => $slug])->firstOrFail();

        return view('info', ['info' => $info]);

    }

    public function single($id)
    {

        $single = Product::where(['id' => $id])->firstOrFail();
        $similar = Product::where('category_id', '=', $id)->get();

        return view('single', ['single' => $single, 'similar' => $similar]);
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

    public function category($slug)

    {
        $category = \App\Category::where(
            ['is_publish' => 1, 'slug' => $slug])->firstOrFail();

        return view('index', ['category' => $category]);
    }

    public function cat($slug)
    {
        $category = \App\Category::where([
            'slug' => $slug
        ])->first();
        // dd($category->name);
        return view('index');
    }


}


//    public function cat($slug)
//    {
//        $categories = \App\Category::where('is_publish', 1)->get();
//        $menu = [];
//        foreach ($categories as $key => $category) {
//            $menu[$category->id] = [
//                'name' => $category->name,
//                'slug' => $category->slug,
//                'parent_id' => $category->parent_id
//            ];
//            if ($categories->where('parent_id,', $category->id)->get()) {
//                $menu[$category->id]['subcategories'] = [];
//                foreach ($categories->where('parent_id,', $category->id)->get() as $key => $value) {
//                    $menu[$category->id]['subcategories'][] =
//                        [
//                            'name' => $category->name,
//                            'slug' => $category->slug,
//                            'parent_id' => $category->parent_id
//                        ];
//                }
//            }
//        }
//        return view('index');
//    }

