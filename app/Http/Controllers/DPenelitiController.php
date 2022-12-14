<?php

namespace App\Http\Controllers;

use App\Models\Peneliti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DPenelitiController extends Controller
{
    public function index()
    {   
        $penelitis = DB::table('penelitis')->get();
        return view('peneliti.show', compact('penelitis'));
    }
}
