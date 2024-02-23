<?php

namespace App\Http\Controllers;
use App\Model\User;
use Illuminate\Http\Request;

class registrationController extends Controller
{
    public function index(){
        return view('frontend.pages.registration.ragistration');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'number' => ['required', 'string', 'max:20', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'password' => Hash::make($request->password),
        ]);

        // You can add any additional logic here, such as sending a verification email

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

}
