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
        $carros = Carro::orderBy('carro')->get();

        return view('carro.index')->with('carros', $carros);
    }

    public function create()
{
    return view('carro.create');
}

    public function store()
    {
        $carro = new Carro();

        $carro->nome = $request->input('nome');
        $carro->modelo = $request->input('modelo');
        $carro->ano = $request->input('ano');
        $carro->marcas_id = $request->input('cor');
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
        $carro = Carro::find($id);
        if($carro)
        {
            return view('carro.edot')->with('carro', $carro);
        } else {
            abort(404);
        }
    }

}


