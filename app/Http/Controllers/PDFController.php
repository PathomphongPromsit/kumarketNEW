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
      $User = User::all()->sortBy('lock', SORT_NATURAL|SORT_FLAG_CASE);
      $time = Time::all();
      
      $pdf = PDF::loadView('pdf',['User' => $User],['times' => $time]);
      $pdf->setpaper('A4','landscape');

      return @$pdf -> stream('KUMarketStore.pdf');
    }
}
