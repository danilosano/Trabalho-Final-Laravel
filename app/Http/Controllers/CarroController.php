<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;
use stdClass;

class CarroController extends Controller
{
    private $carros = [];

    public function __construct()
    {

    }

    public function index()
    {
        $carros = Carro::orderBy('carros')->get();

        return view('carro.index')->with('carros', $carros);
    }

    public function create()
{
    return view('carro.create');
}

    public function store()
    {
        $carro = new Carro();

        $carro->montadoraId = $request->input('montadoraId');
        $carro->nome = $request->input('nome');
        $carro->ano = $request->input('ano');
        $carro->modelo = $request->input('modelo');
        $carro->cor = $request->input('cor');
        $carro->save();

        return(redirect(route('carro.index')));
    }

    public function show($id)
    {
        $carro = Carro::find($id);
        if($carro)
        {
            return view('carro.show')->with('carro', $carro);
        }else {
            abort(404);
        }
    }

    public function edit($id)
    {
        $carros = Carro::find($id);
        if($carros)
        {
            return view('carro.edit')->with('carro', $carro);
        } else {
            abort(404);
        }
    }
    public function update(Request $request, $id)
    {
        $carros = Carro::find($id);

        $carros->montadoraId = $request->input('montadoraId');
        $carros->nome = $request->input('nome');
        $carros->ano = $request->input('ano');
        $carros->modelo = $request->input('modelo');
        $carros->cor = $request->input('cor');
        
        $client->save();
        return(redirect(route('carro.index')));

    }

    public function destroy($id)
    {
        $carros = Carro::find($id);
        $carros->delete();

        return(redirect(route('carro.index')));

    }

}


