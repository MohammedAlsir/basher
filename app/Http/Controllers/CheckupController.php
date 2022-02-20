<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reserves = Reserve::where('medicalexaminations', '!=', null)->where('status_lab', 0)->get();
        return view('lab.index', compact('reserves'));
    }
    public function finish()
    {
        $reserves = Reserve::where('medicalexaminations', '!=', null)->where('status_lab', 1)->get();
        return view('lab.finish', compact('reserves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserve = Reserve::find($id);
        return view('lab.edit', compact('reserve'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reserve =  Reserve::find($id);



        $reserve->resultexaminations = $request->resultexaminations;
        $reserve->status_lab = $request->status_lab;

        $reserve->save();

        Session::flash('SUCCESS', 'تم  اضافة البيانات بنجاح');

        // redirect
        return redirect()->route('checkups.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
