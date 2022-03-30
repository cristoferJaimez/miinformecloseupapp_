<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;


class RegisterController extends Controller
{
    public function register(Request $request){

        $request->validate([
            'password'=> ['required',  Rules\Password::min(8)
                                        ->letters() // letras
                                        ->mixedCase() // menuscula y mayuscula
                                        ->numbers()  // al menos un numero
                                        ->symbols() // un simbolo
                                        ->uncompromised(), //
        ],
        ]);

        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request['password']);

        $users->save();
        return redirect('login');
    }
}
