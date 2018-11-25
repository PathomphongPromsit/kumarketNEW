<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Time;
use App\User;

class TimeController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $times = Time::all();

        return view('settime', ['times' => $times]);
    }
    
    public function userview()
    {
        $times = Time::all();

        return view('userview', ['times' => $times]);
    }

    public function printview()
    {
        $times = Time::all();

        return view('printview', ['times' => $times]);
    }

    public function update($id, Request $request)
    {
    	$rules = [
    		'date' => 'required',
    		'date1' => 'required',
    		'person' => 'required',
    		'name' => 'required'
    	];

    	$validator = Validator::make($request->all(), $rules);

    	if($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
    		$update = Hotel::find($id);
    		$update->date = $request->input('date');
    		$update->date1 = $request->input('date1');
    		$update->name = $request->input('name');
    		$update->person = $request->input('person');
            $update->View = 0;
    		$update->save();

    		return redirect()->route('hotel.index2');
    	}
    }

    public function SetUncome($id)
    {
      $Come = User::find($id);
      dd($Come);
      $Come->come = null;
      $Come->save();

      return redirect('userview');
    }

    public function Setcome($id)
    {
      $Come = User::find($id);
      $Come->come = 1;
      $Come->save();

      return redirect('userview');
    }

}


