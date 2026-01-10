<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        if (session()->has('admin_user_id')) {
            return redirect()->route('admin.relaxation.index');
        }

        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (! $user || ! Hash::check($credentials['password'], $user->password)) {
            return back()
                ->withInput($request->only('email'))
                ->withErrors(['email' => 'Email atau password tidak sesuai.']);
        }

        session(['admin_user_id' => $user->id]);

        return redirect()->route('admin.relaxation.index');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('admin_user_id');

        return redirect()->route('admin.login')->with('status', 'Anda telah keluar dari admin.');
    }
}
