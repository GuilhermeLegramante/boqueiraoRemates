<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use PDF;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $qtd = $request['qtd'] ?: 2;
        $page = $request['page'] ?: 1;
        $buscar = $request['buscar'];

        Paginator::currentPageResolver(function () use ($page){
            return $page;
        });
        if($buscar){
            $clientes = DB::table('clientes')->where('nome', 'like', '%'.$buscar.'%')->paginate($qtd);
        }else{  
            $clientes = DB::table('clientes')->paginate($qtd);
        }
        $clientes = $clientes->appends(Request::capture()->except('page'));
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $dados = $request->all();
            Cliente::create($dados);
            return redirect()
                ->back()
                ->with('success', 'Cliente cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Falha no cadastro. Verifique se o cliente já foi cadastrado!');
        } catch (PDOException $e) {
            dd($e);
        }             
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
 
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $dados = $request->all();
        $cliente->update($dados);
         
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::where('id', $id)->delete();
        return redirect()->route('clientes.index');
    }

    public function remover($id)
    {
        $cliente = Cliente::find($id);
    
        return view('clientes.remove', compact('cliente'));
    }


}
