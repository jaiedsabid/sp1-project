<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminLoginController extends Controller
{
    //

    public function viewSingnup()
    {
        return view('auth.login');
    }


    public function check(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $admin = Admin::where('email', $credentials['email'])
            ->where('password', $credentials['password'])->first();

        if($admin) {
            Auth::guard('admin')->login($admin);
            //Auth::login($admin);
            return redirect()->route('admin.dashboard');
        }
        else {
            return back()->withErrors([
                'error' => 'The provided credentials do not match our records.',
            ]);
        }
    }





}
