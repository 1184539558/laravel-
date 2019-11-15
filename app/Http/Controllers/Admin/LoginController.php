<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login.index');
    }

    public function login(Request $request){
        $data = $this->validate($request,[
            'username' => 'required',
            'password' => 'required',
        ]);
        $bool = auth()->attempt($data);
//        dd($bool);
        if(!$bool){
          return redirect()->back()->withErrors(['error'=>'登录失败']);
        }
        return redirect(route('admin.index'));
    }


    public function logout(){
        auth()->logout();
        return redirect(route('admin.login'))->with(['success' => '退出成功']);
    }

}
