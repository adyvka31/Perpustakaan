<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        // Jika sudah login, redirect ke dashboard
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        
        return view('auth.login');
    }
    
    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->except('password'));
        }
        
        // Coba login
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Regenerasi session untuk keamanan
            $request->session()->regenerate();
            
            return redirect()->intended('dashboard');
        }
        
        // Jika login gagal
        return redirect()->back()
            ->withErrors(['email' => 'Kredensial tidak cocok dengan data kami.'])
            ->withInput($request->except('password'));
    }
    
    // Menampilkan form registert
    public function showRegisterForm()
    {
        // Jika sudah login, redirect ke dashboard
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        
        return view('auth.register');
    }
    
    // Proses register
    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->except('password', 'password_confirmation'));
        }
        
        // Buat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        // Login user baru
        Auth::login($user);
        
        // Regenerasi session untuk keamanan
        $request->session()->regenerate();
        
        return redirect()->route('dashboard');
    }
    
    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        
        // Invalidasi session
        $request->session()->invalidate();
        
        // Regenerasi token
        $request->session()->regenerateToken();
        
        return redirect()->route('login');
    }
}
