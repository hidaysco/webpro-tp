<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=> 'required',
            'nim'=> 'required'
        ]);
        $user = ['name'=>$request->name, 'nim'=>$request->nim];
        session(['user' => $user]);
        return redirect()->route('users.show');
    }

    public function show()
    {
        $user = session('user');
        return view('display', compact('user'));
    }
}
