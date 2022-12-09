<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
        $galeris = DB::table('galeris')->get();

        $beritas = DB::table('beritas')->get();
        return view('homepage', compact('beritas', 'galeris'));
    }
}
