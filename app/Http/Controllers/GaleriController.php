<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function galeri()
    {
        $post_galeri = DB::table('post_galeri')->get();

        return view('admin.create-galeri', ['post_galeri' => $post_galeri]);
    }
}
