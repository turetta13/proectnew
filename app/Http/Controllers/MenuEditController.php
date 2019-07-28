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

class MenuEditController extends Controller
{
    public function adminMenu()
    {
        $categories = Category::paginate(15);

        return view('admin.menu', ['categories' => $categories]);
    }

    public function menuEdit($id)
    {
        $categories = Category::find($id);

        return view('admin.menu.edit', ['categories' => $categories]);
    }


    public function menuDelete($id)
    {
        $categories = Category::find($id);
        $categories->delete();

        return redirect()->back()->with('success', 'Успешно удалено!');
    }


    public function menuCreate()
    {
        $categories = new Category();

        return view('admin.menu.create', ['categories' => $categories]);
    }

    public function menuSave($id = null, Request $request)
    {
//ВАЛИДАЦИЯ РЕДАКТИРОВАНИЯ ДАННЫХ ПОЛЬЗОВАТЕЛЕМ
        $menu = Category::find($id);

        $message = 'успешно отредактировано';

        if ($menu === null) {
            $menu = new Category();

            $validatedData = $request->validate([
                'parent_id' => 'required',
                'is_publish' => 'boolean',
                'slug' => 'unique:categories',
            ]);
            $message = 'категория успешно создана';
        }

        $validatedData = $request->validate([
            'parent_id' => 'required',
            'is_publish' => 'boolean',


        ]);

        if ($menu->isDirty('slug')) {
            $request->validate(['slug' => 'unique:categories']);
        } else {
            $request->validate(['slug' => '']);

            }


        $menu->fill($request->only('id', 'name', 'slug', 'description', 'parent_id', 'is_publish'));

        $menu->save();

        return redirect()->back()->with('success', $message);


    }
}


