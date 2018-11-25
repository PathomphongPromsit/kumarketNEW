<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;


class PrintController extends Controller
{
    public function userview()
    {
        $user = User::all();

        return view('print', ['User' => $user]);
    }
}
