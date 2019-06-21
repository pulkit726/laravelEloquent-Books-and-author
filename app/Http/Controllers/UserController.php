<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\User;

class UserController extends Controller
{
    public function showLogin(){
        return view('admin/login');
    }
    public function doLogin(Request $request){
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $author_id = Auth::id();
            $books = User::find($author_id)->books;
            return view('admin/showBooks',compact($books));
        }else{
            return Redirect::to('login');
        }
    }
    public function userLogout(){
        Auth::logout();
        return Redirect::to('login');
    }
}
