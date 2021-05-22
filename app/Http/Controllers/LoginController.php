<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check())
        {
            return redirect()->route('doctor.dashboard');
        }
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])
            ->where('password', $credentials['password'])->first();

        if($user) {
            Auth::login($user);
            $user->login_ip = $request->ip();
            $user->last_login_at = Carbon::now()->addHours(6);
            $user->save();
            return redirect()->route('doctor.dashboard');
        }
        else {
            return back()->withErrors([
                'error' => 'The provided credentials do not match our records.',
            ]);
        }
    }
}
