<?php

namespace App\ViewModels;

use Illuminate\Support\Facades\Auth;

class AdminLoginViewModel{

    public function isAuthenticated($cridentials){
        if(Auth::guard('admin')->attempt($cridentials)){
            return true;
        }
        return false;
    }
}