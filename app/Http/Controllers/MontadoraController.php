<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class MontadoraController extends Controller
{
    public function index()
    {
        $carros = Carro::all();

        return view('carro.index')->with('carros', $carros);
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        
    }
}
