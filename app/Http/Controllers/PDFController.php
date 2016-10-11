<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use PDF;
use App\Gpu;
class PDFController extends Controller
{
    public function getPDF(){
        $gpus = Gpu::all();
        $pdf=PDF::loadView('gpuspdf',['gpus'=>$gpus]);
        return $pdf->stream('gpus.pdf');
    }
}
