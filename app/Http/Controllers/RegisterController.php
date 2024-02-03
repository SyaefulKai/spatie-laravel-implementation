<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function createUser(Request $request){
        // Validating user input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:App\Models\User,email',
            'password' => 'required',
            'role' => 'required',
        ]);        

        // Registering new user
        $newUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Assign new role to new registered user
        // Make sure you have this role in your database
        $newUser->assignRole('user');

        return redirect()->intended('dashboard');
    }
}
