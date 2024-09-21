<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Mail\ResetPass;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    function index(){
        return view('customer.login');
    }

    function login(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }
        return back()->withErrors([
            'error' => 'Thông tin đăng nhập không chính xác.',
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
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'password' => Hash::make($request->get('password')),
        ]);

        Auth::login($user);
        return redirect()->route('dashboard')->with('success', 'Đăng ký thành công!');
    }

    function forgot(){
        return view('customer.forgot');
    }

    function reset(Request $request){
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $randomPass = Str::random(8);
            $user->password = Hash::make($randomPass);
            $user->save();
            Mail::to($user->email)->send(new ResetPass($user, $randomPass));
            return redirect()->route('login')->with('success', 'Một mật khẩu mới đã được gửi đến email của bạn');
        } else {
            return back()->withErrors([
                'error' => 'Email bạn nhập không tồn tại trong hệ thống',
            ]);
        }
    }

    function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    function handleGoogleCallback(){
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
        } catch (\Exception $e) {
            return redirect()->route('login');
        }

        $existingUser = User::where('email', $googleUser->email)->first();

        if ($existingUser) {
            Auth::login($existingUser, true);
        } else {
            $newUser = new User;
            $newUser->name = $googleUser->name;
            $newUser->email = $googleUser->email;
            $newUser->google_id = $googleUser->id;
            $newUser->save();
            Auth::login($newUser, true);
        }

        return redirect()->intended('/');
    }
}
