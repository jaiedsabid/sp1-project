<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPatientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;

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
        if($patient->save())
        {
            session()->flash('message', 'Patient added successfully');
        }
        else {
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
        //
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
        //
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
