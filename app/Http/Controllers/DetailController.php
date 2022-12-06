<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function index()
    {
        $beritas = DB::table('beritas')->whereIn('id', [1,2,3])->get();

        return view('berita.show', compact('beritas'));
    }
    public function show($id)
    {
        $beritas = DB::table('beritas')->where('id', $id)->get();
        return view('berita.show', compact('beritas')) ;
    }
}
