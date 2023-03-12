<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminLoginComponent extends Component
{
    public $email = "";
    public $password = "";

    protected $rules =[
        'email' => 'required|email',
        'password' => 'required'

    ];

    public function login(){
        $this->validate();

        $credentials = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::guard('admin')->attempt($credentials)) {
            request()->session()->regenerate();

            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors([
            $this->addError('email', trans('auth.failed'))
        ]);

        // return redirect()->intended('/');



    }
    public function render()
    {
        return view('livewire.admin.admin-login-component')->extends('layouts.guest')->section('content');
    }
}
