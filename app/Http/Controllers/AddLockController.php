<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Time;
use App\User;
use Illuminate\Support\Facades\Hash;
class AddLockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('addLock');
    }

    public function store(Request $request)
    {
      $request->validate([
        'lock' => ['required', 'string', 'max:255', 'unique:users'],
  
      ]);

      $user= new User([
        
        'email' => $request->get('lock'),
        'password' => Hash::make($request->get('lock')),
        'isAdmin' => NULL,
        'name' => NULL,
        'surname' => NULL,
        'store_name' => NULL,
        'lock'=>  $request->get('lock'),
        'tel'=> NULL,
      ]);

      $user->save();
      
      return redirect('/addLock')->with('success', 'เพิ่มล๊อกเปล่าสำเร็จ');
    }   
}
