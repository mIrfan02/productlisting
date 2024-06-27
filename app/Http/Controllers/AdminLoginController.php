<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class AdminLoginController extends Controller
{
    public function AuthAdmin(Request $request)
    { {

            $credentials = $request->only('email', 'password');
            $adminEmail = User::where('email', $request->email);
            $adminPassword = User::where('password', $request->password);
            if ($adminEmail && $adminPassword) {
                return redirect()->route('adminindex');
            } else {
                return back()->withErrors(['email' => 'Invalid Credentials']);
            }
        }
    }
}
