<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    /**
     * @param Request $req
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|string
     */
    function login (Request $req)
    {
        $user = User::where('email',request('email'))->first();
        if($user || Hash::check(request('password'), $user->password))
        {
            return "Username or Password isnot match.";
        }
        else {
            $req->session()->put('user', $user);
            return redirect ('/');
        }
    }
}
