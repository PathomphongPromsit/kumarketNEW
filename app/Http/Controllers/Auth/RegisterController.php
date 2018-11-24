<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;  //add
use Illuminate\Auth\Events\Registered; //add

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
    protected $redirectTo = '/add';  //redirect affter regis

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');  //add database
        $this->middleware('admin');
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
            'email' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'surname' => ['required', 'string', 'max:255'],
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'surname' => $data['surname'],
            'store_name' => $data['store_name'],
            'lock'=> $data['lock'],
            'tel'=> $data['tel'],
            //เพิ่ม'store_name', 'tel', 'lock',
            //ไม่ต้องเพิ่ม 'ban', 'come'
        ]);
    }
    public function showRegistrationForm() {   //from register to add
        return view('add');
    }
    
    public function register(Request $request)  //disable auto login
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        //$this->guard()->login($user);
        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
                        
    }
}
