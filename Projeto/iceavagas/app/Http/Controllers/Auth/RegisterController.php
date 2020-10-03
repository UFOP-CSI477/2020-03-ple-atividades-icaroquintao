<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'matricula' => ['required', 'string', 'min:9', 'max:10', 'unique:users'],
            'curso' =>  ['required', 'string', 'max:3'],
            'area' =>  ['required', 'string', 'max:3'],
            'admin' =>  ['string', 'max:3']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     * $table->string('matricula')->unique();
     *       $table->string('adimin');
     *       $table->string('curso');
     *       $table->string('area');
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        #admin@admin password
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'matricula' => $data['matricula'],
            'curso' =>  $data['curso'],
            'area' =>  $data['area'],
            'admin' =>  0,
        ]);
    }
}
