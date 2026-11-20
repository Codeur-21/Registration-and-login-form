<?php

namespace App\Livewire;

use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class AlpineData extends Component
{


    public $name="";
    public $email="";
    public $password="";
    public $password_confirmation= "";


   
    public function login()
    {

        dd('ok go on commence les probleme');

        $this->validatee([
            'name' => ['required', 'string', 'max:20', 'min:5'],
            'email' => ['required', 'string', 'email', 'max:255','exists:users,email'],
            'password' => ['required', 'string', 'confirmed', Password::min(8)->mixedCase()->numbers()->symbols()],
            'password_confirmation' => ['required', 'string',],
        ],[
            'name.required'=> 'veillez renseigner Votre Nom',
            'name.min'=> '5 Caractères au minimum ',
            'name.max'=> 'Nombre de Caractères dépassés 25 au Max',

            'email.required'=>'Email obligatoire',
            'email.email'=>"ceci n\'est pas un vrai email",
            'email.exists'=>'Cet emal exist pas sur cette plate forme',


            'password.required'=>'Saisissez le mot de passe',
            'password.mixedCase'=>'Une Majuscule et Miniscule au Minimum ',
            'password.confirmed'=>"le mot de passse n\'est pas identique",
            'password.numbers'=>'Un Nombre ou Chiffre au minimum',
            'password.symbols'=>'Un Carctère spéciau au minimum',
            'password_confirmation.required'=>'Ressaisir le mot de passe'
        ]);
    }





    public function render()
    {
        return view('livewire.alpine-data');
    }
}
