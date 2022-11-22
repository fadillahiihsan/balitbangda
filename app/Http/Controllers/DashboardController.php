<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function berita()
    {
        return view('admin.create-berita');
    }

    public function galeri()
    {
        return view('admin.create-galeri');
    }
}
