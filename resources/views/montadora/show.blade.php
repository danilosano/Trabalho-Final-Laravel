@extends('base')

@section('content')
    
<div id="main">

    <div class="inner">
        <!-- About Us -->
        <header id="inner">
            <h1>Atualização de Montadoras</h1>
        </header>
        <form action="{{ route('montadora.update', $montadora->id)}}" method="POST">	
            @csrf
            @method('put')
            <!-- Nome input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="nomeCarro">Nome da Montadora</label>
                <input type="text" id="nome" name="nome" value="{{ $montadora->nome}}" class="form-control" />
            </div>

            <!-- Modelo input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="modeloCarro">Nacionalidade</label>
                <input type="text" id="nacionalidade" name="nacionalidade" value="{{ $montadora->nacionalidade}}" class="form-control" />
            </div>	
            
            <!-- ano- input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="anoCarro">Ano de Criação</label>
                <input type="number" id="anoCriacao" name="anoCriacao" value="{{ $montadora->anoCriacao}}" class="form-control" />
            </div>	

            <!-- cor input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="corCarro">Telefone</label>
                <input type="text" id="telefone" name="telefone" value="{{ $montadora->telefone}}" class="form-control" />
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-4">Atualizar</button>
        </form>
        <br>
</div>

</div>


@endsection