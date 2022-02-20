<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pharmacy = Pharmacy::all();
        return view('admin.pharmacy.index', compact('pharmacy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pharmacy.create');
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

        $pharmacy = new Pharmacy();

        $pharmacy->name = $request->name;
        $pharmacy->address = $request->address;
        $pharmacy->email = $request->email;


        $user  = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = 4;
        $user->password = Hash::make('123456789');
        $user->save();

        $pharmacy->user_id =  $user->id;

        $pharmacy->save();

        //flash messge

        Session::flash('SUCCESS', 'تم اضافة الصيدلية بنجاح');

        // redirect
        return redirect()->route('pharmacy.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pharmacy = Pharmacy::find($id);
        return view('admin.pharmacy.show', compact('pharmacy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pharmacy = Pharmacy::find($id);
        return view('admin.pharmacy.edit', compact('pharmacy'));
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

        $pharmacy = Pharmacy::find($id);

        $pharmacy->name = $request->name;
        $pharmacy->address = $request->address;
        $pharmacy->email = $request->email;


        $user  =  User::find($pharmacy->user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $pharmacy->save();


        //flash messge

        Session::flash('SUCCESS', 'تم تعديل  الصيدلية بنجاح');

        // redirect
        return redirect()->route('pharmacy.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pharmacy = Pharmacy::find($id);
        $pharmacy->delete();

        $user = User::find($pharmacy->user_id);
        $user->delete();


        Session::flash('SUCCESS', 'تم حذف الصيدلية  بنجاح');

        // redirect
        return redirect()->route('pharmacy.index');
    }
}