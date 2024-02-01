<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('guest')->except([
    //         'logout', 'dashboard'
    //     ]);
    // }


    function dashboard()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->withErrors('Please login to access the dashboard.')->onlyInput('email');
        }
        return view('pages.dashboard');
    }

    function login()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('pages.login');
    }

    public function auth(LoginRequest $request)
    {
        $request = $request->validated();

        if (filter_var($request['username'], FILTER_VALIDATE_EMAIL)) {
            //user sent their email 
            Auth::attempt(['email' => $request['username'], 'password' => $request['password']]);
        } else {
            //they sent their username instead 
            Auth::attempt(['username' => $request['username'], 'password' => $request['password']]);
        }

        if (!Auth::check()) {
            return redirect()->to('login')->withErrors(trans('auth.failed'));
        }

        $role = Auth::user()->roles->name;
        if($role === 'admin'){
            return redirect()->intended('dashboard')->withSuccess('Login Success');
        }else{
            return redirect()->intended('admin/users');
        }
        
    }

    // function register(RegisterRequest $request)
    // {
    //     try {
    //         $user = User::create($request->validated());

    //         auth()->login($user);

    //         return redirect('/dashboard')->withSuccess("Account successfully registered.");
    //     } catch (\Exception $e) {
    //         return redirect()->back()->withErrors('User Not created');
    //     }
    // }

    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
