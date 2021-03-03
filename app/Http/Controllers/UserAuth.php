<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;

class UserAuth extends Controller
{
    //
    function userLogin(Request $req )
    {

        //echo session('user');
        $this->validate($req,[
            'user'=>'required',
            'password'=>'required|alphaNum|min:3'
        ]);
        $username=$req->input('user');
        $password=$req->input('password');
        $checkLogin=DB::table('users')->where(['name'=>$username,'password'=>$password])->get();
        if(count($checkLogin)>0)
        {

        $data=$req->input();
        $req->session()->put('user',$data['user']);
        return redirect('profile');
        }
        else
        {
            //echo "incorrect credentials";
            return back()->with('error','Wrong login credentials');
            //return redirect('login');
        }
    }
    
}
