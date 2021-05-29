<?php

namespace App\Http\Controllers;

use App\Models\Associado;
use Illuminate\Http\Request;

class AssociadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $associados = Associado::all();

        return view('index')->with('associados', $associados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $associado = new Associado();

        $associado->nome = $request->input('nome');
        $associado->telefone = $request->input('telefone');
        $associado->celular = $request->input('celular');
        $associado->profissao = $request->input('profissao');
        $associado->nit = $request->input('nit');
        $associado->cognome = $request->input('cognome');
        $associado->pis = $request->input('pis');
        $associado->cp = $request->input('cp');
        $associado->conjuge = $request->input('conjuge');
        $associado->nascimento = $request->input('nascimento');
        $associado->genero = $request->input('genero');
        $associado->pai = $request->input('pai');
        $associado->mae = $request->input('mae');
        $associado->escolaridade = $request->input('escolaridade');
        $associado->rgp = $request->input('rgp');
        $associado->naturalidade = $request->input('naturalidade');
        $associado->nacionalidade = $request->input('nacionalidade');
        $associado->estado_civil = $request->input('estado_civil');
        $associado->identidade = $request->input('identidade');
        $associado->expedidor = $request->input('expedidor');
        $associado->cpf = $request->input('cpf');
        $associado->titulo_eleitor = $request->input('titulo_eleitor');
        $associado->zona_eleitor = $request->input('zona_eleitor');
        $associado->secao_eleitor = $request->input('secao_eleitor');
        $associado->categoria_socio = $request->input('categoria_socio');
        $associado->data_inscricao = $request->input('data_inscricao_novo') ? $request->input('data_inscricao_novo') : $request->input('data_inscricao');
        $associado->data_matricula = $request->input('data_matricula_novo') ? $request->input('data_matricula_novo') : $request->input('data_matricula');

        $associado->save();

        return redirect(route("associados.show", ["associado" => $associado->id] ));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $associado = Associado::find($id);
        if ($associado) {
            return view('associado')->with('associado',$associado);
        } else {
            return response(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $associado = Associado::find($id);
        if ($associado) {
            return view('edit')->with('associado',$associado);
        } else {
            return response(404);
        }
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
        $associado = Associado::find($id);

            if ($associado) {

            $associado->nome = $request->input('nome');
            $associado->telefone = $request->input('telefone');
            $associado->celular = $request->input('celular');
            $associado->profissao = $request->input('profissao');
            $associado->nit = $request->input('nit');
            $associado->cognome = $request->input('cognome');
            $associado->pis = $request->input('pis');
            $associado->cp = $request->input('cp');
            $associado->conjuge = $request->input('conjuge');
            $associado->nascimento = $request->input('nascimento');
            $associado->genero = $request->input('genero');
            $associado->pai = $request->input('pai');
            $associado->mae = $request->input('mae');
            $associado->escolaridade = $request->input('escolaridade');
            $associado->rgp = $request->input('rgp');
            $associado->naturalidade = $request->input('naturalidade');
            $associado->nacionalidade = $request->input('nacionalidade');
            $associado->estado_civil = $request->input('estado_civil');
            $associado->identidade = $request->input('identidade');
            $associado->expedidor = $request->input('expedidor');
            $associado->cpf = $request->input('cpf');
            $associado->titulo_eleitor = $request->input('titulo_eleitor');
            $associado->zona_eleitor = $request->input('zona_eleitor');
            $associado->secao_eleitor = $request->input('secao_eleitor');
            $associado->categoria_socio = $request->input('categoria_socio');
            $associado->data_inscricao = $request->input('data_inscricao_novo') ? $request->input('data_inscricao_novo') : $request->input('data_inscricao');
            $associado->data_matricula = $request->input('data_matricula_novo') ? $request->input('data_matricula_novo') : $request->input('data_matricula');

            $associado->save();
            
            return redirect(route("associados.show", ["associado" => $associado->id] ));
        } 

        return response(404);
    }

    /**
     * Confirm Removal of the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $associado = Associado::find($id);

        if ($associado) {
            return view('delete')->with('associado',$associado);
        }
        return redirect("/");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $associado = Associado::find($id);

        if ($associado) {
           $associado->destroy($id);
        }
        return redirect("/");
    }
}
