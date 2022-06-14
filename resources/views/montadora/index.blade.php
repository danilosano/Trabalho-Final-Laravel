@extends('base')

@section('content')
    
    <h2>Montadoras cadastradas</h2>
    <hr>
        @if(count($montadoras) > 0)
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ano de Criação</th>
                    <th>Macionalidade</th>
                    <th>Telefone</th>
                </tr>
                @foreach($montadoras as $montadora)
                    <tr>
						<td>{{ $montadora->id }}</td>
						<td>{{ $montadora->nome }}</td>
						<td>{{ $montadora->anoCriacao }}</td>
                        <td>{{ $montadora->nacionalidade }}</td>
                        <td>{{ $montadora->telefone }}</td>
                        <td><a href="{{route("montadora.show", $montadora->id)}}"><input type="submit" value="Visualizar"></a></td>
                    </tr>
                @endforeach
            </table>
        @else
                <tr>
                    <td colspan="3">Não há montadoras cadastrados!</td>
                </tr>
        @endif
    
@endsection

