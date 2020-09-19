<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PrintController extends Controller
{
    public function print()
    {
    	$pdf = PDF::loadview('laporan.hasil')->setPaper('A4', 'potrait');
    	return $pdf->stream();
    }
}
