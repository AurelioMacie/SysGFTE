@foreach($rotas as $rota)    
    <tr>
        <th>{{ $rota->id }}</th>
        <th>{{ $rota->partida }}</th>
        <th>{{ $rota->destino }}</th>
		<th>{{ $rota->descricao }}</th>
    </tr>
@endforeach
