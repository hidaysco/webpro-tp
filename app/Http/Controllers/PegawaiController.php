<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pegawai = Pegawai::all();
        return view('index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([ 
            'name' => 'required', 
            'posisi' => 'required', 
            'gaji' => 'required|integer', 
        ]); 
        Pegawai::create($request->all()); 
        return redirect()->route('pegawai.index')->with('success', 'Data berhasil ditambahkan.');
    }
}
