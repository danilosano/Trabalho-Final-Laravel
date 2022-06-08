<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Montadora;

class MontadoraController extends Controller
{
    private $montadoras = [];

    public function index()
    {
        $montadoras = Montadora::orderBy('id')->get();
        return view('montadora.index')->with('montadoras', $montadoras);
    }

    public function create()
    {
        return view('montadora.create');
    }

    public function store(Request $request)
    {
        $montadoras = new Montadora();

        $montadoras->nome = $request->input('nome');
        $montadoras->nacionalidade = $request->input('nacionalidade');
        $montadoras->anoCriacao = $request->input('anoCriacao');
        $montadoras->telefone = $request->input('telefone');
        $montadoras->save();

        return redirect(route('montadora.index'));
    }

    public function show($id)
    {
        $montadoras = Montadora::find($id);

        if($montadoras){
            return view('montadora.show')->with('montadora', $montadoras);
        } else{
            return abort(404);
        }
    }

    public function edit($id)
    {
        $montadoras = Montadora::find($id);

        if($montadoras){
            return view('montadora.edit')->with('montadora', $montadoras);
        } else{
            return abort(404);
        }
    }

    public function update(Request $request, $id)
    {
        $montadoras = Montadora::find($id);

        $montadoras->nome = $request->nome;
        $montadoras->nacionalidade = $request->nacionalidade;
        $montadoras->anoCriacao = $request->anoCriacao;
        $montadoras->telefone = $request->telefone;
        $montadoras->save();

        return redirect(route('montadora.index'));
    }

    public function destroy($id)
    {
        $montadoras = Montadora::find($id);
        $montadoras->delete();

        return(redirect(route('montadora.index')));
    }
}
