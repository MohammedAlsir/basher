<?php

namespace App\Http\Controllers;

use App\Models\Consult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ConsultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consults = Consult::where('user_id', auth()->user()->id)->where('status', 0)->get();
        return view('consult.index', compact('consults'));
    }

    public function finish()
    {
        $consults = Consult::where('user_id', auth()->user()->id)->where('status', 1)->get();
        return view('consult.finish', compact('consults'));
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
        $consult = Consult::find($id);
        return view('consult.edit', compact('consult'));
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
        $consult = Consult::find($id);
        $consult->reply = $request->reply;
        $consult->status = 1;
        $consult->save();
        Session::flash('SUCCESS', 'تم الرد على الاستشارة');

        return redirect()->route('consult.finish');
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