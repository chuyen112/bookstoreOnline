<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    
    
    public function index(){
        return view('adminlogin');
    }
    public function showdashboard(){
        
        return view('adminlayout');
    }
    public function dashboard(Request $request){
        $email = $request-> email;
        $password = md5($request->password);
        $result = DB::table('tbl_admin')->where('email', $email)->where('password', $password)->first();
        if(isset($result)){
            return view('adminlayout');
        }else{
            Session::put('message', 'Mật khẩu hoặc tài khoản bị sai. Làm ơn nhập lại');
            return Redirect::to('/admin');

        }

    }
    public function logout(){
        
        return Redirect::to('/admin');
    }
}
