<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = 'Doctor';
        return view('auth.signup')->with('page_name',$page_name);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SignUpRequest $req)
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

        return redirect()->route('login');

    }
}
