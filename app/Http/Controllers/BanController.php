<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use app\User;
class BanController extends Controller
{
    public function index()
    {
      $Ban = User::all()->where('ban',1);
      $data = array(
        'Ban' => $Ban
      );
      $UnBan = User::all()->where('ban',null);
      $data1 = array(
        'UnBan' => $UnBan
      );
      return view('ban',$data,$data1);
    }
}
