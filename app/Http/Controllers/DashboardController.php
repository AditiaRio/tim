<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return Redirect::route('login');
        }
        $user = Auth::user();
        return view('dasbor', compact('user'));
    }
    public function logout()
        {
            Auth::logout();
            return redirect('register');
        }
}
