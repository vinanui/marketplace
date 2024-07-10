<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6',
        ]);

        $user = new User([
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

//buat ngedebug
        dd($user->attributesToArray());

        $user->save();

        return redirect('/login')->with('success', 'Registration successful. Please login.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:users,id',
            'password' => 'required|string',
        ]);

        $user = User::find($request->id);

        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors(['message' => 'Unauthorized']);
        }

        Auth::login($user);
        return redirect('/caterings'); 
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
