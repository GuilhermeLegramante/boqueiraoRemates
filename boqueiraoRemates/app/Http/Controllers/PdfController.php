<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Cliente;

class PdfController extends Controller
{
    public function index()
    {
        /**$clientes = Cliente::all();
         **/ 
        $clientes = Cliente::all();
        $pdf = PDF::loadView('pdf', compact('clientes'));
        return $pdf->download('invoice.pdf');
    }
}
