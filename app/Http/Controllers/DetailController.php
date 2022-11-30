<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function index()
    {
        $beritas = DB::table('beritas')->get();

        return view('layouts.detail', compact('beritas'));
    }
}
