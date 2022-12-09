<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function show($id)
    {
        $beritas = DB::table('beritas')->where('id', $id)->get();
        return view('berita.show', compact('beritas')) ;
    }
}
