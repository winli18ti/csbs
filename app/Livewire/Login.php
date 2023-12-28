<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class Login extends Component
{
    public $email, $password;
    
    public function render(){
        return view('livewire.login');
    }

    public function auth_login(){
        $credentials = $this->validate([
            'email' => 'required',
            'password' => 'required', 
        ]);
        if(Auth::attempt($credentials)){
            return redirect()->route('home');
        }
        throw ValidationException::withMessages([
            'email' => 'username/password salah',
        ]);
    }
}
