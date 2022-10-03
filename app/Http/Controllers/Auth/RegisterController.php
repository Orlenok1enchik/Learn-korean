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
            'surname' => ['required', 'string', 'max:255', 'regex:/^[А-Яа-яЁё\s\-]+$/u'],
            'name' => ['required', 'string', 'max:255', 'regex:/^[А-Яа-яЁё\s\-]+$/u'],
            'lastname' => ['required', 'string', 'max:255', 'regex:/^[А-Яа-яЁё\s\-]+$/u'],
            'birthday' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'photo' => ['required'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
            'agreement' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if (!empty($_FILES)){
            move_uploaded_file(
                $_FILES['photo']['tmp_name'],
                'image/' . $_FILES['photo']['name']
            );
        }

        return User::create([
            'surname' => $data['surname'],
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'birthday' => $data['birthday'],
            'email' => $data['email'],
            'is_admin' => 0,
            'photo' => '/image/'. $_FILES['photo']['name'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
