<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PDF;
use App\Time;

class PDFController extends Controller
{

    public function pdfview()
    {
      $User = User::all();
      $pdf = PDF::loadView('pdf',['User' => $User]);

      $time = Time::all();
      
      return @$pdf -> stream();
    }
    
    public function pdftime()
    {
      $time = Time::all();
      $User = User::all();
      return view('pdf', ['User' => $User], ['times' => $time]);
    }
}
