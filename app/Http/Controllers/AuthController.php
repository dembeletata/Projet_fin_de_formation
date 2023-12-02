<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt( $credentials)) {
            $adminEmail='demking138@gmail.com';
            $adminPassword='DemT2023';
            if (Auth::user()->email=== $adminEmail && \Hash::check($adminPassword, Auth::user()->password)) {

                return redirect()->intended('/admin/users/tableau');

            } else {
                return redirect()->intended('/');

            }
        }
        return redirect('/login')->with('error', 'Email ou mot de passe incorrect!');

    }
}
