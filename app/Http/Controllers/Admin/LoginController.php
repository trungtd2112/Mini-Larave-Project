<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin(){
        return view('backend.login');   
    }

    public function postLogin(Request $request){
        $login_data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if($request->remember == "remember"){
            $remember = true;
        }else{
            $remember = false;
        }
        if(Auth::attempt($login_data, $remember)){
            return redirect('admin/home');
        }else{
            return back()->withInput()->with('error','Failed');
        }
    }
}
