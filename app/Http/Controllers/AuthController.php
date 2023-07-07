<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use App\Models\User;
class AuthController extends Controller
{
    public function index(Request $request)
    {
        return view ('login');
    }

    public function forgot_password(Request $request)
    {
        return view ('forgot_password');
    }

    public function register(Request $request)
    {
        return view('register');
    }

        public function register_post(Request $request)
    {
        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/')->with('success','Register Successfully');
    }
}

?>
