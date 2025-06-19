<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Pengecekan role user
        if (Auth::user() && Auth::user()->role === 'admin') {
        return redirect()->route('admin.dashboard.index');
    }

        return view('home'); // Untuk regular user
    }
}
