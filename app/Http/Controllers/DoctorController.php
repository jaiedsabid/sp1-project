<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPatientRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('doctor.dashboard');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('doctor.doctor-profile')->with('user', $user);
    }

    public function edit_profile()
    {
        $doctor = Auth::user();
        return view('doctor.edit-doctor-profile')
            ->with('doctor', $doctor);
    }

    public function update_profile(Request $request)
    {
        $doctor = Auth::user();
        $id = $doctor->id;

        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|min:8|max:40|email:rfc|unique:users,email,' . $id . 'id',
            'password' => 'required|confirmed|min:5|max:20',
            'address' => 'required',
            'mobile' => 'required|numeric',
            'dob' => 'required',
            'image' => 'max:4000|mimes:jpg,png'
        ]);

        $doctor->name = $request->name;
        $doctor->degree = $request->degree;
        $doctor->email = $request->email;
        $doctor->password = $request->password;
        $doctor->address = $request->address;
        $doctor->mobile = $request->mobile;
        $doctor->dob = $request->dob;

        if($request->hasFile('image')) {
            File::delete('uploads/images/' . $doctor->image);
            $extension = $request->file('image')->getClientOriginalExtension();
            $image_name = time() . date('y-m-d') . '.' . $extension;
            $doctor->image = $image_name;
            $request->file('image')->move('uploads/images', $image_name);
        }

        if($doctor->save()) {
            session()->flash('success', 'Profile information updated successfully.');
        } else {
            session()->flash('success', 'Profile information update failed!');
        }

        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.add-patient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddPatientRequest $request)
    {
        $patient = new Patient;
        $patient->user_id = Auth::user()->id;
        $patient->name = $request->name;
        $patient->age = $request->age;
        $patient->mobile = $request->mobile;
        $patient->address = $request->address;
        $patient->problem = $request->problem;

        if($request->hasFile('image')) {
            File::delete('uploads/images/' . $patient->image);
            $extension = $request->file('image')->getClientOriginalExtension();
            $image_name = time() . date('y-m-d') . '.' . $extension;
            $patient->image = $image_name;
            $request->file('image')->move('uploads/images', $image_name);
        }

        if($patient->save())
        {
            session()->flash('message', 'Patient added successfully');
        } else {
            session()->flash('message', 'Failed to add the patient!');
        }
        return back();
    }

    public function patient_list()
    {
        $user = Auth::user();
        $patients = $user->patients()->paginate(10);
        return view('doctor.patient-list')->with('patients', $patients);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::find($id);
        return view('doctor.patient-profile')->with('patient', $patient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('doctor.edit-patient')
            ->with('patient', $patient);
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
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'problem' => 'required',
            'image' => 'max:4000|mimes:jpg,png,jpeg'
        ]);

        $patient = Patient::find($id);
        $patient->user_id = Auth::user()->id;
        $patient->name = $request->name;
        $patient->age = $request->age;
        $patient->mobile = $request->mobile;
        $patient->address = $request->address;
        $patient->problem = $request->problem;

        if($request->hasFile('image')) {
            File::delete('uploads/images/' . $patient->image);
            $extension = $request->file('image')->getClientOriginalExtension();
            $image_name = time() . date('y-m-d') . '.' . $extension;
            $patient->image = $image_name;
            $request->file('image')->move('uploads/images', $image_name);
        }

        if($patient->save())
        {
            session()->flash('message', 'Patient details updated successfully');
        } else {
            session()->flash('message', 'Failed to update the patient details!');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Patient::destroy($id))
        {
            session()->flash('message', 'Patient removed successfully');
        }
        else {
            session()->flash('message', 'Failed to remove Patient!');
        }
        return redirect()->route('doctor.patient_list');
    }
}
