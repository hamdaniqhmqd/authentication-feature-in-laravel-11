<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        if (Auth::User()->role == 'admin') {
            $data['admin'] = User::find(Auth::User()->id);

            return view('admin.dashboard', $data);
        } elseif (Auth::User()->role == 'manager') {
            $data['manager'] = User::find(Auth::User()->id);

            return view('manager.dashboard', $data);
        } else {
            return redirect('/')->with(['error' => 'Checked your email and password']);
        }
    }
}
