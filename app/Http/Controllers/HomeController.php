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


class HomeController extends Controller
{

    public function index()
    {
        $user = \Auth::user();

        return view('home', ['user' => $user]);

    }

    public function profileEdit()
    {
        $user = \Auth::user();

        return view('user.edit', ['user' => $user]);
    }

    public function profileSave(Request $request)
    {
//ВАЛИДАЦИЯ РЕДАКТИРОВАНИЯ ДАННЫХ ПОЛЬЗОВАТЕЛЕМ
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'numeric|digits:12',
        ]);

        $user = \Auth::user();
        $user->fill($request->only('name', 'email', 'phone'));
        if ($request->password) {
            $user->password = \Hash::make($request->password);
        }
        $user->save();
        return redirect('home');
    }

    public function profileList()
    {
        $user = User::get()->paginate(20);
        return view('user.list', ['user' => $user]);
    }
}





