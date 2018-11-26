<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Time;
use App\User;
class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $times = Time::all();

        return view('settime.index', compact('times'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $time = Time::find($id);

        return view('settime.edit', compact('time'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'day_ku_night'=>'required',
            'day_of_week_start'=>'required',
            'time_start'=>'required',
            'day_of_week_stop'=>'required',
            'time_stop'=>'required',
            'announce'=> 'required',
        ]);

        $time = Time::find($id);

        $time->day_ku_night = $request->get('day_ku_night');
        $time->day_of_week_start = $request->get('day_of_week_start');
        $time->time_start = $request->get('time_start');
        $time->day_of_week_stop = $request->get('day_of_week_stop');
        $time->time_stop = $request->get('time_stop');
        $time->announce = $request->get('announce');

        $time->save();

        return redirect('/settime')->with('success', 'Stock has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function userview()
    {
        $times = Time::all();
        $User = User::all();

        return view('userview', ['times' => $times],['User' => $User]);
    }

    public function Setcome($id)
    {
      $Come = User::find($id);
      $Come->come = 1;
      $Come->save();

      return redirect('userview')->with('success', 'Stock has been updated');
    }
    public function SetUncome($id)
    {
      $Come = User::find($id);
      $Come->come = null;
      $Come->save();

      return redirect('userview')->with('success', 'Stock has been updated');
    }
}
