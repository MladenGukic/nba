<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\RegisterRequest;

use Illuminate\Support\Facades\Mail;

use App\Mail\UserVerification;

use App\User;

class RegisterController extends Controller
{
    public function __construct() {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('register.create');
    }
    public function store(RegisterRequest $request) 
    {
        \Log::info($request);
        $user = new User;

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->is_verified = false;

        $user->save();

        Mail::to($request->email)->send(new UserVerification($user));

        return redirect('/'); 
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }
}
