<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Time;
use App\User;
use Illuminate\Support\Facades\Hash;
class AddAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('addAdmin');
    }

    public function store(Request $request)
    {
      $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'confirmed'],
  
      ]);

      $user= new User([
        
        'email' => $request->get('email'),
        'password' => Hash::make($request->get('password')),
        'isAdmin' => '1',

        'name' => $request->get('name'),
        'surname' => NULL,
        'store_name' => NULL,
        'lock'=>  NULL,
        'tel'=> NULL,
      ]);

      $user->save();
      
      return redirect('/addAdmin')->with('success', 'เพิ่มผู้ดูแลระบบสำเร็จ');
    }   
}
