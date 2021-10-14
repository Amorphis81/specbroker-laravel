<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LoginForm extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        if (Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
            'is_active' => true,
        ])) {
            session()->flash('success', 'Авторизация успешна');

            if(Auth::user()->is_admin){
                return redirect()->route('user.announce');
            }

            return redirect()->home();

        } else {
            session()->flash('error', 'Ошибка входа');

            return redirect()->home();
        }

    }

//    public function render()
//    {
//        return view('livewire.login-form');
//    }
}
