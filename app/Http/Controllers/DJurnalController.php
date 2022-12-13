<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DJurnalController extends Controller
{
    
    public function show($id)
    {
        $jurnals = DB::table('jurnals')->where('id', $id)->get();
        return view('jurnal.show', compact('jurnals'));
    }
}
