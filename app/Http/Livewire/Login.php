<?php

namespace App\Http\Livewire;

use App\Helpers\Tools;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Session;

class Login extends Component
{
    use WithFileUploads;

    public function __construct($id = null)
    {
        parent::__construct($id);
        Tools::instance()->setup();
    }

    public $signUp = false;
    public $data = [];

    public function changeForm($value) {
        if($value != "login") {
            $this->dispatchBrowserEvent('signUpLoaded');
            $this->signUp = true;
        } else {
            $this->signUp = false;
        }
    }

    public function login() {
        Validator::make($this->data, [
            'email'=> 'required',
            'password'=> 'required'
        ])->validate();
    }

    public function signUp() {
        Validator::make($this->data, [
            'firstname'=> 'required|min:3|max:50',
            'lastname'=> 'min:3|max:50',
            'email'=> 'required|email:filter',
            'country'=> 'required',
            'photo'=> 'image|max:3072',
        ])->validate();

    }
    public function render()
    {
        return view('livewire.login')
            ->extends('layouts.master')
            ->section('content');
    }
}
