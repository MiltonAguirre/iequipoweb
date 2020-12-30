<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
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
          'first_name' => 'required|string|min:3|max:255|regex:/^[\pL\s]+$/u',
          'last_name' => 'required|string|min:3|max:255|regex:/^[\pL\s]+$/u',
          'nick' => 'required|string|min:3|max:255|unique:users|alpha_dash',
          'email' => 'required|string|email|min:6|max:255|unique:users',
          'phone' => 'required|numeric|digits_between:5,20',
          'sex' => 'required|string|min:3|max:7|alpha',
          'city' => 'required|string|min:3|max:255|regex:/^[\pL\s]+$/u',
          'location' => 'required|string|min:3|max:255|regex:/^[\pL\s]+$/u',
          'birthday' => 'required|date'
//          'role' => 'required|numeric|min:1|max:2'
        ],[
          'first_name.required' => 'Debe ingresar su nombre.',
          'first_name.min' => 'El nombre no puede ser tan corto.',
          'first_name.max' => 'El nombre no puede ser tan largo.',
          'first_name.regex' => 'El nombre debe contener solo letras y espacios.',
          'first_name.string' => 'El nombre es incorrecto.',
          'last_name.required' => 'Debe ingresar su apellido.',
          'last_name.min' => 'El apellido no puede ser tan corto.',
          'last_name.max' => 'El apellido no puede ser tan largo.',
          'last_name.regex' => 'El apellido debe contener solo letras y espacios.',
          'last_name.string' => 'El apellido es incorrecto.',
          'nick.required' => 'Debe ingresar su nick.',
          'nick.string' => 'El nick es incorrecto.',
          'nick.min' => 'El nick es muy corto.',
          'nick.max' => 'El nick es muy largo.',
          'nick.unique' => 'El nick ya ha sido registrado.',
          'nick.alpha_dash' => 'El nick debe contener solo letras, numeros y guiones.',
          'email.required' => 'Debe ingresar su email',
          'email.email' => 'El correo electrónico no es valido.',
          'email.max' => 'El correo electrónico es muy largo.',
          'email.min' => 'El correo electrónico es muy corto.',
          'email.unique' => 'El correo ya ha sido registrado.',
          'phone.required' => 'Debe ingresar el número telefónico.',
          'phone.numeric' => 'El número telefónico debe contener solo números.',
          'phone.digits_between' => 'El número telefónico es inválido.',
          'city.required' => 'Debe ingresar su ciudad de residencia.',
          'city.string' => 'La ciudad es inválida.',
          'city.min' => 'La ciudad no puede ser tan corta.',
          'city.max' => 'La ciudad no puede ser tan larga.',
          'city.regex' => 'La ciudad debe contener solo letras y espacios.',
          'location.required' => 'Debe ingresar su localidad de residencia.',
          'location.string' => 'La localidad destino es inválida.',
          'location.min' => 'La localidad no puede ser tan corta.',
          'location.max' => 'La localidad no puede ser tan larga.',
          'location.regex' => 'La localidad debe contener solo letras y espacios.',
          'birthday.required' => 'Debe ingresar su cumpleaños.',
          'birthday.date' => 'La fecha de cumpleaños no es válida.',
          'sex.required' => 'Debe ingresar su sexo.',
          'sex.min' => 'El sexo es demasiado corto.',
          'sex.max' => 'El sexo es demasiado largo.',
          'sex.alpha' => 'El sexo debe contener solo letras.',
          'sex.string' => 'El sexo es incorrecto.',
          


//          'role.required' => 'Debe seleccionar un rol.',
//          'role.numeric' => 'El rol debe ser un número.',
//          'role.min' => 'El rol es incorrecto.',
//          'role.max' => 'El rol es incorrecto.'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {   
        $data_user = \App\DataUser::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
            'city' => $data['city'],
            'location' => $data['location'],
            'sex' => $data['sex'],
            'birthday' => $data['birthday']
        ]);
        $user = new \App\User;
        $user->role = "player";//for now, only player role
        $user->nick = $data['nick'];
        $user->email = $data['email'];
        $user->password = bcrypt('asdasd' );//for now, password 'asdasd' allways
        $user->dataUser()->associate($data_user);
        $user->save();

        return $user;
    }
}
