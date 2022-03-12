<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerUser(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
         
        ]);

        $user = new User();

        $user->username = $request->username;
        $user->email = $request->email;
        $user->password =Hash::make($request->password) ;


        $res = $user->save();

        if (!$res) {
            return back()->with('fail', 'something went wrong');
        }

        return back()->with('success', 'Account successfully created');
    }

    public function loginUser (Request $request){
        $request->validate([
            
            'username' => 'required',
            'password' => 'required',
         
        ]);

        $user = User::where('username', '=', $request->username)->first();

        if (!$user) {
            return back()->with('fail', 'User not found');
        }

        if (!Hash::check($request->password, $user->password)) {
            return back()->with('fail', 'Incorrect password');
        }

        $request->session()->put('loginId', $user->id);

        return redirect('/')->with('success', 'Account successfully logged in');
    }
}
