<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Time;


class PrintController extends Controller
{
    public function userview()
    {
        $user = User::all();
        $time = Time::all();

        return view('print', ['User' => $user], ['times' => $time]);
    }

    public function resetcome()
    {
        User::query()->update(['come' => NULL]);
        return redirect('print')->with('success', 'database has been updated');
    }
}
