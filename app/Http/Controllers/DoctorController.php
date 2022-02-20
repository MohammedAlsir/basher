<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Specialist;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DoctorController extends Controller
{
    private $uploadPath = "uploads/";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialists = Specialist::all();
        return view('admin.doctors.create', compact('specialists'));
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
            'email'        => 'required|email|unique:users',
            'years'        => 'required',
            'photo'        => 'required|mimes:png,jpeg,jpg,gif,svg',
            'address'        => 'required',
            'specialist_id'        => 'required',
            'qualifications' => 'required'
        ));

        //Insert

        $doctor = new Doctor();

        // Start of Upload Files
        $formFileName = "photo";
        $fileFinalName = "";
        if ($request->$formFileName != "") {
            $fileFinalName = time() . rand(
                1111,
                9999
            ) . '.' . $request->file($formFileName)->getClientOriginalExtension();
            $path = $this->uploadPath;
            $request->file($formFileName)->move($path, $fileFinalName);
        }

        $doctor->photo = $fileFinalName;
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->years = $request->years;
        $doctor->address = $request->address;
        $doctor->specialist_id = $request->specialist_id;
        $doctor->qualifications = $request->qualifications;



        $user  = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = 2;
        $user->password = Hash::make('123456789');
        $user->save();

        $doctor->user_id =  $user->id;


        $doctor->save();

        //flash messge

        Session::flash('SUCCESS', 'تم اضافة الطبيب بنجاح');

        // redirect
        return redirect()->route('doctors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = Doctor::find($id);
        return view('admin.doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        $specialists = Specialist::all();
        return view('admin.doctors.edit', compact('specialists', 'doctor'));
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
            'email'        => 'required|email',
            'years'        => 'required',
            'photo'        => 'mimes:png,jpeg,jpg,gif,svg',
            'address'        => 'required',
            'specialist_id'        => 'required',
        ));

        //Insert

        $doctor = Doctor::find($id);

        // Start of Upload Files
        $formFileName = "photo";
        $fileFinalName = "";
        if ($request->$formFileName != "") {
            $fileFinalName = time() . rand(
                1111,
                9999
            ) . '.' . $request->file($formFileName)->getClientOriginalExtension();
            $path = $this->uploadPath;
            $request->file($formFileName)->move($path, $fileFinalName);
        }

        if ($fileFinalName != "") {
            $doctor->photo = $fileFinalName;
        }
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->years = $request->years;
        $doctor->address = $request->address;
        $doctor->specialist_id = $request->specialist_id;
        $doctor->qualifications = $request->qualifications;

        $user  =  User::find($doctor->user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = 2;
        // $user->password = Hash::make('123456789');
        $user->save();

        // $doctor->user_id =  $user->id;


        $doctor->save();

        //flash messge

        Session::flash('SUCCESS', 'تم تعديل بيانات  الطبيب بنجاح');

        // redirect
        return redirect()->route('doctors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();

        $user = User::find($doctor->user_id);
        $user->delete();

        Session::flash('SUCCESS', 'تم حذف الطبيب بنجاح');

        // redirect
        return redirect()->route('doctors.index');
    }
}