<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = auth()->user()->name;
        
        $total_clientes = DB::table('clientes')->count();
        $total_clientes_divulgacao = DB::table('clientes_divulgacao')->count();
        $total_habilitados = DB::table('clientes')->where('habilitacao', 'Habilitado')->count();

        $percentual_habilitados = ($total_habilitados * 100) / $total_clientes;

        return view('home', compact('total_clientes', 'total_clientes_divulgacao', 'total_habilitados', 'percentual_habilitados'));
    }
}
