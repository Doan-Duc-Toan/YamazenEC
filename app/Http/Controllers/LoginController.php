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
      return redirect()->route('login');
   }

   function register(Request $request){
     $validate = $request->validate([
       'name' => 'string|min:8|required',
       'email' => 'email|required',
       'phone' => 'regex:/^([0-9]{10,11})$/|required',
       'password' => 'required|min:8'   
     ]); 
     
     $user = User::create([
      'name'=> $request->get('name'),
      'email' => $request->get('email'),
      'phone' => $request->get('phone'),
      'password' => Hash::make($request->get('password')),
     ]);

     Auth::login($user);
     return redirect()->route('dashboard')->with('success', 'Đăng ký thành công!');;
   }
}
