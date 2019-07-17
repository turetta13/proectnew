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

    public function adminList()
{
    $users = User::paginate(10);
//       dd($users);
    return view('admin.list', ['users' => $users]);
}

    public function profileEdit($id)
    {
        $user = User::find($id);

        return view('user.edit', ['user' => $user]);
    }

    public function profileDelete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with('success','Успешно удалено!');
    }

//    public function profileCreate()
//    {
//        $user = new User();
//
//        return view('user.edit', ['user' => $user]);
//    }



    public function profileSave($id,Request $request)
    {
//ВАЛИДАЦИЯ РЕДАКТИРОВАНИЯ ДАННЫХ ПОЛЬЗОВАТЕЛЕМ
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'numeric|digits:12',
            'role' => 'numeric',
        ]);

        $user = User::find($id);
        $user->fill($request->only('name', 'email', 'phone','role'));
        if ($request->password) {
            $user->password = \Hash::make($request->password);
        }

        $user->save();
        return redirect()->back()->with('success','Данные изменены');
    }


}





