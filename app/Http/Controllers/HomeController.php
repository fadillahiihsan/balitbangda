<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $post_berita = DB::table('post_berita')->get();

        return view('homepage', ['post_berita' => $post_berita]);
    }
}
