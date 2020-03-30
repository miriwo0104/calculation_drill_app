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
        $addition_boolean = $user->addition;
        $subtraction_boolean = $user->subtraction;
        $multiplication_boolean = $user->multiplication;
        
        $calculation_boolean_array = [$addition_boolean, $subtraction_boolean, $multiplication_boolean];
        return view('user.home', compact('user_id', 'user_name', 'addition_boolean', 'subtraction_boolean', 'multiplication_boolean'));
    }
    
    public function settings() {
        return view('user.settings');
    }
}
