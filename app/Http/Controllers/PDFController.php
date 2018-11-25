<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PDF;

class PDFController extends Controller
{

    public function pdfview()
    {
      $User = User::all();
      $pdf = PDF::loadView('pdf',['User' => $User]);
      return @$pdf -> stream();
    }
}
