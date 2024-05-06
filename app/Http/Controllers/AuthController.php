<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Support\Str;

use function Ramsey\Uuid\v1;

class AuthController extends Controller
{
	public function register(): View
	{
		return view('Auth.register');
	}

	public function process_register(Request $request): RedirectResponse
	{
		$request->validate([
			'username' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|min:8',
		]);

        $id = date('Ymd');

		User::create([
            'id'=> $id,
			'nama' => $request->username,
			'username' => $request->username,
			'email' => $request->email,
			'password' => Hash::make($request->password),
            'remember_token'    => Str::random(20),
		]);

		return redirect('/')->with(['success' => 'Register successfully']);
	}

	public function login(): View
	{
		return view('Auth.login');
	}

    public function process_login(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password], true)) {
            if (Auth::User()->role == 'admin') {
                return redirect('/admin/dashboard')->with(['success' => 'Login successfully']);
            } elseif (Auth::User()->role == 'manager') {
                return redirect('/manager/dashboard')->with(['success' => 'Login successfully']);
            } else {
                return redirect('/')->with(['error' => 'Checked your email and password']);
            }
        } else {
            return redirect('/')->with(['error' => 'Login failed']);
        }
    }

	public function forget(): View
	{
		return view('Auth.forget');
	}

    public function logout(): RedirectResponse{
        Auth::logout();
        return redirect('/')->with(['success' => 'Logout successfully']);
    }
}
