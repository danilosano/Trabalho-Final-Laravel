@extends('base')

@section('content')
    
<div id="main">

    <div class="inner">
        <!-- About Us -->
        <header id="inner">
            <h1>Cadastro de carros</h1>
            <p>Cadastro dos carros mais malados da America Latina</p>
        </header>
        <form action="{{ route('carro.update', $carro->id)}}" method="POST">	
            @csrf
            @method('put')
            <!-- Nome input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="nomeCarro">Nome do Carro</label>
                <input type="text" id="nome" name="nome" value="{{ $carro->nome}}" class="form-control" />
            </div>

            <!-- Modelo input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="modeloCarro">Modelo do Carro</label>
                <input type="text" id="modelo" name="modelo" value="{{ $carro->modelo}}" class="form-control" />
            </div>	
            
            <!-- ano- input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="anoCarro">Ano do Carro</label>
                <input type="number" id="ano" name="ano" value="{{ $carro->ano}}" class="form-control" />
            </div>	

            <!-- cor input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="corCarro">Cor do Carro</label>
                <input type="text" id="cor" name="cor" value="{{ $carro->cor}}" class="form-control" />
            </div>

            <select id="montadoraid" name="montadoraid">
            @foreach($lista as $montadora)
                <option value="{{$montadora->id}}">
                    {{$montadora->nome}}
                </option>
            @endforeach
            </select>
            <button type="submit" class="btn btn-primary btn-block mb-4">Atualizar</button>
        </form>
        <br>
</div>

</div>


@endsection