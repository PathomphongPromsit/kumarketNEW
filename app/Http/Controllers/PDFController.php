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
      $time = Time::all();
      
      $pdf = PDF::loadView('pdf',['User' => $User],['times' => $time]);

      return @$pdf -> stream();
    }
}
