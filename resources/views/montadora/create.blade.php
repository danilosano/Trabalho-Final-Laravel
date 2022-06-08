@extends('base')

@section('content')
    
<div id="main">
    <div class="inner">
        <!-- About Us -->
        <header id="inner">
            <h1>Cadastro de montadoras</h1>
            <p>Cadastro dos montadoras mais malados da America Latina</p>
        </header>
        <div class="row">
        <div class="col-lg-8">
        <form action="{{ route('montadora.store')}}" method="POST">	
            @csrf
            <!-- Nome input -->
            <div class="">
                <label class="form-label" for="nomeCarro">Nome da Montadora</label>
                <input type="text" id="nome" name="nome"class="form-control" />
            </div>

            <!-- Modelo input -->
            <div class="">
                <label class="form-label" for="modeloCarro">Nacionalidade</label>
                <input type="text" id="nacionalidade" name="nacionalidade" class="form-control" />
            </div>	
            
            <!-- ano- input -->
            <div class="">
                <label class="form-label" for="anoCarro">Ano de Criação</label>
                <input type="number" id="anoCriacao" name="anoCriacao" class="form-control" />
            </div>	

            <!-- cor input -->
            <div class="">
                <label class="form-label" for="corCarro">Telefone</label>
                <input type="text" id="telefone" name="telefone" class="form-control" />
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-block mb-4">Cadastrar</button>
        </form>
    </div>
</div>
        <br>
</div>

</div>


@endsection