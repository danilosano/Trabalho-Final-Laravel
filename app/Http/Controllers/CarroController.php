<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Montadora;
use Illuminate\Http\Request;
use stdClass;

class CarroController extends Controller
{
    private $carros = [];
    private $montadora = [];

    public function __construct()
    {

    }

    public function index()
    {
        $carros = Carro::orderBy('carros')->get();
        $montadora = Montadora::orderBy('id')->get();

        return view('carro.index')->with('carros', $carros)->with('montadoras',$montadora);
    }

    public function create()
{
    $lista = Montadora::orderBy('montadoras')->get();

    return view('carro.create')->with('lista', $lista);
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carro = new Carro();

        $carro->montadoraId = $request->input('montadoraid');
        $carro->nome = $request->input('nome');
        $carro->ano = $request->input('ano');
        $carro->modelo = $request->input('modelo');
        $carro->cor = $request->input('cor');
        $carro->save();

        return(redirect(route('carro.index')));
    }

    public function show($id)
    {
        $lista = Montadora::orderBy('montadoras')->get();
        $carro = Carro::find($id);
        if($carro)
        {
            return view('carro.show')->with('carro', $carro)->with('lista', $lista);
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

        $carros->montadoraId = $request->input('montadoraid');
        $carros->nome = $request->input('nome');
        $carros->ano = $request->input('ano');
        $carros->modelo = $request->input('modelo');
        $carros->cor = $request->input('cor');
        
        $carros->save();
        return(redirect(route('carro.index')));

    }

    public function destroy($id)
    {
        $carros = Carro::find($id);
        $carros->delete();

        return(redirect(route('carro.index')));

    }

}


