<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function adminAuthenticate(Request $request)
    {
        $adminLoginModel = resolve('App\ViewModels\AdminLoginViewModel');
        $cridentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if($adminLoginModel->isAuthenticated($cridentials)){
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return  back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
