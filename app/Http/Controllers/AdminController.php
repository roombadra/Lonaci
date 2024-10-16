<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function Authlogin()
    {
        return view('maintenance.Auth.login');
    } 
    
    public function Register()
    {
        return view('maintenance.Auth.register');
    } 

    public function Login(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();
        return redirect('/dashboard');
    }

    public function Create(Request $request)
    {
        $data = $request->all();
        $rules =  [
            'name'=>'required|string',
            'email'=>'required|email|unique:users',
            'password'=>'required|string|min:5'
        ];
        $messages = [
            'required' => 'This value is required',
            'string' => 'This value must be a character string',
            'email.required'=>'Please enter an email',
            'password.min'=>'Password size is too short',
            'email.email'=>'Please enter a valid email',
            'email.unique'=>'This email is already in use'
        ];
        $request->password = Hash::make($request->password);
        $data['password'] = $request->password;

        Validator::make($data, $rules, $messages)->validate();
        $save = User::create($data);
        session()->flash('success','un nouveau Utilisateur ajouté!');
        return redirect('/');
        
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
