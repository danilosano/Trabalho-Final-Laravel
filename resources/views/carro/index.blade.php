@extends('base')
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
                        <td>{{ $montadoras[$carro->montadoraId-1]->nome }}</td>
						<td>{{ $carro->nome }}</td>
						<td>{{ $carro->ano }}</td>
                        <td>{{ $carro->modelo }}</td>
                        <td>{{ $carro->cor }}</td>
                        <td><a href="{{route("carro.show", $carro->id)}}"><input type="submit" value="Visualizar"></a></td>
                        <td><form method="POST" 
                           action="{{ route('carro.destroy',  $carro->id ) }}">
                           @csrf
                           @method('DELETE')
                           <input type="submit" value="Excluir">
                        </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        @else
                <tr>
                    <td colspan="3">Não há carros cadastrados!</td>
                </tr>
        @endif
    
@endsection

