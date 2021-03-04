<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Validator;

class SignupController extends Controller
{
    //
    function userRegister(Request $req)
    {
        $this->validate($req,[
            'user'=>'required',
            'email'=>'required|email',
            'password'=>'required|alphaNum|min:3',
            'con-password' => 'required_with:password|same:password|min:3'
        ]);
        $user=new User();
    $user->name=$req->input('user');
        $user->email=$req->input('email');
        $user->password=$req->input('password');
        //$con_password=$req->input('con-password');
        $user->save();
        $data=$req->input();
        $req->session()->put('user',$data['user']);
        return redirect('profile');
        
    }
}
