<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
   function index(){
     return view('customer.login');
   }

   function login(Request $request){
    if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
      return redirect()->route('dashboard');
    }
    return back()->withErrors([
        'login_error' => 'Thông tin đăng nhập không chính xác.',
    ]);
   }
   
   function logout(){
      Auth::logout();
      return redirect('/login');
   }
}
