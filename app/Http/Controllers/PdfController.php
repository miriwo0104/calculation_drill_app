<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class PdfController extends Controller
{
    public function test(){
    
        $pdf = PDF::loadHTML('<h1>test</h1>');
    
        return $pdf->stream();
    
    }
}
