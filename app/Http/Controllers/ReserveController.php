<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = User::find(Auth::user()->id);
        $reserves = Reserve::where('userId', (Auth::user()->id))->where('status', 0)->get();
        return view('doctor.reserves.index', compact('reserves'));
    }

    public function finish()
    {
        // $user = User::find(Auth::user()->id);
        $reserves = Reserve::where('userId', (Auth::user()->id))->where('status', 1)->get();
        return view('doctor.reserves.finish', compact('reserves'));
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
        return view('doctor.reserves.edit', compact('reserve'));
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

        //Insert
        $reserve =  Reserve::find($id);


        $reserve->health_status = $request->health_status;
        $reserve->medicalexaminations = $request->medicalexaminations;
        $reserve->drugs = $request->drugs;
        $reserve->status = $request->status;

        $reserve->save();

        Session::flash('SUCCESS', 'تم  اضافة البيانات بنجاح');

        // redirect
        return redirect()->route('reserves.index');
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
