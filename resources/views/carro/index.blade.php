@extends('base')
@php
    $nomes = ['Toma', 'Tomeee'];
@endphp
@section('content')
    
    <h2>Carros cadastrados</h2>
    <hr>
        @if(count($carros) > 0)
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Montadora</th>
                    <th>Nome</th>
                    <th>Ano</th>
                    <th>Modelo</th>
                    <th>Cor</th>
                </tr>
                @foreach($carros as $carro)
                    <tr>
						<td>{{ $carro->id }}</td>
                        @if($carro->montadoraId == 7){
                            <td>Carro Zika</td>
                        }
                        @endif
						
						<td>{{ $carro->nome }}</td>
						<td>{{ $carro->ano }}</td>
                        <td>{{ $carro->modelo }}</td>
                        <td>{{ $carro->cor }}</td>
                        <td><button><a href="{{route("carro.show", $carro->id)}}">Visualizar</a></button></td>
                    </tr>
                @endforeach
            </table>
        @else
                <tr>
                    <td colspan="3">Não há carros cadastrados!</td>
                </tr>
        @endif
    
@endsection

