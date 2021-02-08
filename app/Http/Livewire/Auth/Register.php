<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class Register extends Component
{
    public $email = '';
    public $name = '';
    public $password = '';
    public $passwordConfirmation = '';

    public function updatedEmail(){
        $this->validate(['email'=>'unique:users']);
    }
    public function updatedPassword(){
        $this->validate(['password'=>'min:6']);
    }
     public function updatedpasswordConfirmation(){
        $this->validate(['passwordConfirmation'=>'same:password']);
    }
    public function register()
    {
        $data =$this->validate([
            'email'=> 'required|email|unique:users',
              'name'=> 'required',
                'password'=> 'required|min:6|same:passwordConfirmation',
        ]);
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect(route('user-login'));
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
