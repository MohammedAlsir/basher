<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labs = Lab::all();
        return view('admin.labs.index', compact('labs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.labs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name'        => 'required',
            'address'        => 'required',
            'email'        => 'required',
        ));

        //Insert

        $lab = new Lab();

        $lab->name = $request->name;
        $lab->address = $request->address;
        $lab->email = $request->email;


        $user  = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = 3;
        $user->password = Hash::make('123456789');
        $user->save();

        $lab->user_id =  $user->id;

        $lab->save();

        //flash messge

        Session::flash('SUCCESS', 'تم اضافة المعمل بنجاح');

        // redirect
        return redirect()->route('labs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lab = Lab::find($id);
        return view('admin.labs.show', compact('lab'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lab = Lab::find($id);
        return view('admin.labs.edit', compact('lab'));
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
        $this->validate($request, array(
            'name'        => 'required',
            'address'        => 'required',
            'email'        => 'required',
        ));

        //Insert

        $lab = Lab::find($id);

        $lab->name = $request->name;
        $lab->address = $request->address;
        $lab->email = $request->email;


        $user  =  User::find($lab->user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $lab->save();


        //flash messge

        Session::flash('SUCCESS', 'تم تعديل  المعمل بنجاح');

        // redirect
        return redirect()->route('labs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lab = Lab::find($id);
        $lab->delete();

        $user = User::find($lab->user_id);
        $user->delete();

        Session::flash('SUCCESS', 'تم حذف المعمل  بنجاح');

        // redirect
        return redirect()->route('labs.index');
    }
}