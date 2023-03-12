<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AdminRegisterComponent extends Component
{
    public $name , $email , $phone_number , $password , $password_confirmation;
    protected $rules = [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email', 'unique:admins,email'],
        'phone_number' => ['required',],
        'password' =>  'required_with:password_confirmation|same:password_confirmation|required|min:3',
        'password_confirmation' => 'required|min:3'

    ];

    public function register(){
        $this->validate();
        Admin::create([
            'name' =>  $this->name,
            'email' => $this->email ,
             'phone_number' =>$this->phone_number ,
             'password' => Hash::make($this->password)



        ]);
        session()->flash('message', 'Account successfully created.');
        return redirect()->to('/admin/login');


    }
    public function render()
    {
        return view('livewire.admin.admin-register-component')->extends('layouts.guest')->section('content');
    }
}
