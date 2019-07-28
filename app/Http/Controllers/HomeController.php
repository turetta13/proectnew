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

        return redirect()->back()->with('success', 'Успешно удалено!');
    }

    public function profileCreate()
    {
        $user = new User();

        return view('user.edit', ['user' => $user]);
    }


    public function profileSave($id = null, Request $request)
    {
//ВАЛИДАЦИЯ РЕДАКТИРОВАНИЯ ДАННЫХ ПОЛЬЗОВАТЕЛЕМ

        $user = User::find($id);
        $message = 'Данные изменены';

        if ($user===null){
            $user = new User();
            $message = 'Пользователь успешно создан';
        }

            $email_rules='required|email';
        if($user->isDirty('email')) {
            $email_rules=$email_rules.'required|email';
        }
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'numeric|digits:12',
            'role' => 'numeric',
        ]);

        if ($request->has('avatar')) {
            // Get image file
            $image = $request->file('avatar');

            // Define folder path
            $folder = '/uploads/users/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $name=md5(time());
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();

            $image->move(public_path($folder),$name. '.'.$image->getClientOriginalExtension());
            // Upload image

            // Set user profile image path in database to filePath
            $user->avatar = $filePath;

        }

        $user->fill($request->only('name', 'email', 'phone', 'role'));
        if ($request->password) {
            $user->password = \Hash::make($request->password);
        }
        $user->save();

        return redirect()->back()->with('success', $message);


    }
}





