<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use app\User;
class BanController extends Controller
{
    public function index()
    {
      $Ban = User::all()->where('ban',1)->where('isAdmin',null)->sortBy('lock', SORT_NATURAL|SORT_FLAG_CASE);
      $data = array(
        'Ban' => $Ban
      );
      $UnBan = User::all()->where('ban',null)->where('isAdmin',null)->sortBy('lock', SORT_NATURAL|SORT_FLAG_CASE);
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
    public function search(Request $request)
    {
      $searchData = $request->searchData;
      $Ban = User::where('lock','like','%'.$searchData.'%')
      ->orwhere('name','like','%'.$searchData.'%')
      ->orwhere('surname','like','%'.$searchData.'%')
      ->orderBy('lock', 'ASC')
      ->get();
      $data2 = array(
        'Ban' => $Ban
      );
      $UnBan = User::where('lock','like','%'.$searchData.'%')
      ->orwhere('name','like','%'.$searchData.'%')
      ->orwhere('surname','like','%'.$searchData.'%')
      ->orderBy('lock', 'ASC')
      ->get();
      $data3 = array(
        'UnBan' => $UnBan
      );
      return view('ban',$data2,$data3);
    }
}
