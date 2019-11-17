<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Socialite;
use App\User;

class LoginController extends Controller
{
    public function getDangNhap()
    {
        return view('login');
    
    }
    public function postDangNhap(Request $request)
    {   

        $arr=['email'=>$request-> email,'password'=>$request-> password];
        if( $request->remember='Remember Me'){
            $remember= true;
        }
        else{
            $remember=false;
        }
        if( Auth::attempt($arr,$remember)){
            return redirect('trang-chu-admin');

        }
        else{
            return back()->withInput()->with('error','Tài khoản hoặc mật khẩu chưa đúng');
        }
    }
}