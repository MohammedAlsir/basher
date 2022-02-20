<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function pharmacist()
    {
        $reserves = Reserve::where('drugs', '!=', null)->where('status_drug', 0)->get();
        return view('drug.index', compact('reserves'));
    }

    public function doctor()
    {
        return view('doctor.index');
    }

    public function lab()
    {
        $reserves = Reserve::where('medicalexaminations', '!=', null)->where('status_lab', 0)->get();
        return view('lab.index', compact('reserves'));
        // return view('lab.index');
    }
}