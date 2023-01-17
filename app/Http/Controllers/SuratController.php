<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index()
    {
        // $surat = Surat::all();
        return view('surat');
    }

    // public function add()
    // {
    //     return view('surat-add');
    // }

    // public function store(Request $request)
    // {
    //     $validate = $request->validate([
    //         'surat_code' =>  'required|unique:surat|max:100',
    //         'title' => 'required|max:50',
    //         'status' => 'required|max:50'
    //     ]);

    //     $surat = Surat::create($request->all());
    //     return redirect('surat')->with('status','Category Data Successfully Added');
    // }
}
