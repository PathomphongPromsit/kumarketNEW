<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use app\User;
class BanController extends Controller
{
    public function index()
    {
      $Ban = User::all()->where('ban',1)->where('isAdmin',null);
      $data = array(
        'Ban' => $Ban
      );
      $UnBan = User::all()->where('ban',null)->where('isAdmin',null);
      $data1 = array(
        'UnBan' => $UnBan
      );
      return view('ban',$data,$data1);
    }

    public function SetUnban($id)
    {
      $Ban = User::find($id);
      $Ban->ban = null;
      $Ban->save();

      return redirect('ban');
    }

    public function Setban($id)
    {
      $Ban = User::find($id);
      $Ban->ban = 1;
      $Ban->save();

      return redirect('ban');
    }
}
