<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UjianController extends Controller
{
    public function index()
    {
        $data_ujian = \App\Ujian::all();
        return view('ujian.index',['data_ujian' => $data_ujian]);
    }
    public function create(Request $request);
    {
        \App\Ujian::create($request->all());
        return redirect('/ujian');
    }
}
