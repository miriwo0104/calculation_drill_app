<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//下記がないとAuthの情報拾ってこられない
use Auth;

class UserController extends Controller
{
    public function home() {
        $user_id = Auth::id();
        $user = \App\User::find($user_id);
        $user_name = $user->name;
        return view('user.home', compact('user_id'));
    }
}
