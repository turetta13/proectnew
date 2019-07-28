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

    public function productsEdit($id)
    {
        $products = Product::find($id);

        return view('admin.products.edit', ['products' => $products]);
    }


    public function productsDelete($id)
    {
        $products = Product::find($id);
        $products->delete();

        return redirect()->back()->with('success', 'Успешно удалено!');
    }


    public function productsCreate()
    {
        $products = new Product();

        return view('admin.products.create', ['products' => $products]);
    }

    public function productsSave($id = null, Request $request)
    {

        $product = Product::find($id);

        $message = 'успешно отредактировано';

        if ($product === null) {
            $product = new Product();
            $message = 'продукт успешно создан';
        }
//ВАЛИДАЦИЯ РЕДАКТИРОВАНИЯ ДАННЫХ ПОЛЬЗОВАТЕЛЕМ
        $validatedData = $request->validate([
            'category_id' => 'required',
            'publish' => 'boolean',

        ]);

        if ($request->has('image_path')) {

        // Get image file
        $image = $request->file('image_path');

        // Define folder path
        $folder = '/uploads/products/';
        // Make a file path where image will be stored [ folder path + file name + file extension]
        $name=md5(time());
        $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();

        $image->move(public_path($folder),$name. '.'.$image->getClientOriginalExtension());
        // Upload image

        // Set user profile image path in database to filePath
        $product->image_path = $filePath;
    }

        if ($request->has('image_path_2')) {
            // Get image file
            $image = $request->file('image_path_2');

            // Define folder path
            $folder = '/uploads/products/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $name=md5(time());
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();

            $image->move(public_path($folder),$name. '.'.$image->getClientOriginalExtension());
            // Upload image

            // Set user profile image path in database to filePath
            $product->image_path_2 = $filePath;
        }

        if ($request->has('image_path_3')) {
            // Get image file
            $image = $request->file('image_path_3');

            // Define folder path
            $folder = '/uploads/products/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $name=md5(time());
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();

            $image->move(public_path($folder),$name. '.'.$image->getClientOriginalExtension());
            // Upload image

            // Set user profile image path in database to filePath
            $product->image_path_3 = $filePath;
        }


        $product->fill($request->only('name', 'composition', 'description', 'shortdesc', 'price', 'category_id', 'publish'));

        $product->save();

        return redirect()->back()->with('success', $message);


    }
}
