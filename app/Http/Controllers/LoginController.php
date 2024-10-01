<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    // this will sho login page for user
    public function index()
    {
        return view('login');
    }
    // this will show authenticate user
    public function authenticate(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->passes()) {

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                
            } else {
                return redirect()->route('account.login')->with('Either email or password is inccorect.');
            }
        } else {
            return redirect()->route('account.login')
                ->withInput()
                ->withErrors($validator);
        }
    }

    // this method will show register page 
    public function register() {
return view('register');
    }


    public function processRegister(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        if ($validator->passes()) {

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->level = 'tamu';
            $user->save();

            return redirect()->route('account.login')->with('succes','You have registed successfully.');
        } else {
            return redirect()->route('account.register')
                ->withInput()
                ->withErrors($validator);
        }
    }
}
