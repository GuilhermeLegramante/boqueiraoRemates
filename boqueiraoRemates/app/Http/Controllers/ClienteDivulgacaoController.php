<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClienteDivulgacao;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class ClienteDivulgacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $qtd = $request['qtd'] ?: 15;
        $page = $request['page'] ?: 1;
        $buscar = $request['buscar'];

        Paginator::currentPageResolver(function () use ($page){
            return $page;
        });
        if($buscar){
            $clientes_divulgacao = DB::table('clientes_divulgacao')->where('nome', 'like', '%'.$buscar.'%')->paginate($qtd);
        }else{  
            $clientes_divulgacao = DB::table('clientes_divulgacao')->paginate($qtd);
        }
        $clientes_divulgacao = $clientes_divulgacao->appends(Request::capture()->except('page'));
        return view('clientes_divulgacao.index', compact('clientes_divulgacao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes_divulgacao.create');
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

            ClienteDivulgacao::create($dados);

            
            return redirect()
                ->back()
                ->with('success', 'Cliente Divulgação cadastrado com sucesso!');
        } catch (Exception $e) {
            return redirect()
            ->back()
            ->with('error', 'Falha no cadastro. Verifique se o Cliente Divulgação já foi cadastrado!');        
        
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
        $cliente_divulgacao = ClienteDivulgacao::find($id);
        return view('clientes_divulgacao.show', compact('cliente_divulgacao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente_divulgacao = ClienteDivulgacao::find($id);
        return view('clientes_divulgacao.edit', compact('cliente_divulgacao'));
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
        $cliente_divulgacao = ClienteDivulgacao::find($id);
        $dados = $request->all();

        $cliente_divulgacao->update($dados);
         
        return redirect()
            ->back()
            ->with('success', 'Cliente Divulgação editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ClienteDivulgacao::where('id', $id)->delete();
        return redirect()->route('clientes_divulgacao.index');
    }

    public function remover($id)
    {
        $cliente_divulgacao = ClienteDivulgacao::find($id);
        return view('clientes_divulgacao.remove', compact('cliente_divulgacao'));
    }

    public function detalhar_divulgacao($id)
    {
        $cliente_divulgacao = ClienteDivulgacao::find($id);
        return view('detalhes_divulgacao', compact('cliente_divulgacao'));
    }

    public function viraCliente($id){
        $cliente_divulgacao = ClienteDivulgacao::find($id);
        return view('viraCliente', compact('cliente_divulgacao'));
    }

}
