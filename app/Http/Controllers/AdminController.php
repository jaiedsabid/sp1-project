<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use App\Models\Admin;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard');
    }
    public function profile()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.profile')->with('admin',$admin);
    }

    public function edit()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.edit')->with('admin',$admin);
    }

    public function storeEdit(Request $req)
    {
        $this->validate($req,[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|min:4',
            'con_password'=>'required_with:password|same:password|min:4'
        ]);

        $admin = Auth::guard('admin')->user();

        $admin->name = $req->name;
        $admin->email = $req->email;
        $admin->password = $req->password;

        $admin->save();

        return redirect()->route('admin.profile');
    }

    public function addView()
    {
        return view('admin.addView');
    }

    public function addDoctor()
    {
        return view('admin.addDoctor');
    }

    public function storeDoctor(SignUpRequest $req)
    {

        $user = new User;

        $user->name = $req->name;
        $user->degree = $req->degree;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->address = $req->address;
        $user->mobile = $req->mobile;
        $user->dob = $req->dob;
        $user->image = $req->image;

        if($req->hasFile('image'))
        {
            $image = $req->file('image');
            $extension = $image->getClientOriginalExtension();
            $image_name = date('y-m-d').time() . '.' . $extension;
            $image->move('uploads/images',$image_name);
            $user->image = $image_name;
        }

        $user->save();

        return redirect()->route('admin.dashboard');

    }

    public function totalUser()
    {
        $user = User::all();
        $doctorCount = count($user);

        $patient = Patient::all();
        $patientCount = count($patient);

        return view('admin.total')->with('patientCount',$patientCount)->with('doctorCount',$doctorCount);
    }

    public function removeDoctor(Request $request, $id)
    {
        if(User::destroy($id)) {
            session()->flash('message', 'Doctor Removed Successfully');
        }
        return redirect()->route('admin.doc_activity');
    }

    public function doctorsActivity(Request $request)
    {
        $doctors = User::simplePaginate(5);
        return view('admin.activity-log')->with('doctors', $doctors);
    }

}
