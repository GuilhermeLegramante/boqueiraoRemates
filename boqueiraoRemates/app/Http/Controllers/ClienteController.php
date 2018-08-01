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
        $qtd = $request['qtd'] ?: 15;
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

            $dados['scan_negativas'] = $request->scan_negativas;
            $dados['scan_rg_cpf_cnh'] = $request->scan_cpf_cnh;
            $dados['scan_comprovante_endereco'] = $request->scan_comprovante_endereco;

            if($request->hasFile('scan_negativas') && $request->file('scan_negativas')->isValid()){
                $nome = 'negativas-'.$request->cpf.'-'.kebab_case($request->nome);
                $extensao = $request->scan_negativas->extension();
                $nomeArquivoNegativas = "{$nome}.{$extensao}";
                $dados['scan_negativas'] = $nomeArquivoNegativas;
                $uploadNegativas =  $request->scan_negativas->storeAs('negativas_clientes', $nomeArquivoNegativas);
            }

            if($request->hasFile('scan_rg_cpf_cnh') && $request->file('scan_rg_cpf_cnh')->isValid()){
                $nome2 = 'rg_cpf_cnh-'.$request->cpf.'-'.kebab_case($request->nome);
                $extensao2 = $request->scan_rg_cpf_cnh->extension();
                $nomeArquivoCpfCnh = "{$nome2}.{$extensao2}";
                $dados['scan_rg_cpf_cnh'] = $nomeArquivoCpfCnh;
                $uploadCpfCnh =  $request->scan_rg_cpf_cnh->storeAs('rg_cpf_cnh_clientes', $nomeArquivoCpfCnh);
            }
            
            if($request->hasFile('scan_comprovante_endereco') && $request->file('scan_comprovante_endereco')->isValid()){
                $nome3 = 'comprovante_endereco-'.$request->cpf.'-'.kebab_case($request->nome);
                $extensao3 = $request->scan_comprovante_endereco->extension();
                $nomeArquivoComprovanteEndereco = "{$nome3}.{$extensao3}";
                $dados['scan_comprovante_endereco'] = $nomeArquivoComprovanteEndereco;
                $uploadComprovanteEndereco =  $request->scan_comprovante_endereco->storeAs('comprovante_endereco_clientes', $nomeArquivoComprovanteEndereco);
                
            }

            if($request->hasFile('logo_estabelecimento') && $request->file('logo_estabelecimento')->isValid()){ 
                $nome4 = 'logo_estabelecimento-'.$request->cpf.'-'.kebab_case($request->estabelecimento);
                $extensao4 = $request->logo_estabelecimento->extension();
                $nomeArquivoLogoEstabelecimento = "{$nome4}.{$extensao4}";
                $dados['logo_estabelecimento'] = $nomeArquivoLogoEstabelecimento;
                $uploadLogoEstabelecimento =  $request->logo_estabelecimento->storeAs('logo_estabelecimento', $nomeArquivoLogoEstabelecimento);    
            }
            
            Cliente::create($dados);
            return redirect()
                ->back()
                ->with('success', 'Cliente cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Falha no cadastro. Verifique se o cliente já foi cadastrado!');
                
        } catch (PDOException $e) {
            return redirect()
            ->back()
            ->with('error', 'Falha no cadastro. Verifique se o cliente já foi cadastrado!');        }             
            
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
         
        return redirect()
            ->back()
            ->with('success', 'Cliente editado com sucesso!');
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
