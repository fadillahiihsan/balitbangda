<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class BeritaController extends Controller
{
    public function berita()
    {
        $post_berita = DB::table('post_berita')->get();

        return view('admin.create-berita', ['post_berita' => $post_berita]);
    }
}
