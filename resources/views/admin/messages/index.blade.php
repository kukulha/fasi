@extends('layouts.app')

@section('title', 'Mensajes')

@section('content')
<main>
	<section class="section container center">
		<h4 class="orange-text">Mensajes</h4>
		<table class="centered striped">
			<thead>
				<th>Nombre</th>
				<th>Teléfono</th>
				<th>Fecha</th>
				<th>Acciones</th>
			</thead>
			<tbody>
				@foreach($messages as $message)
					<tr>
						<td>{{ $message->name }}</td>
						<td>{{ $message->phone }}</td>
						<td>{{ $message->created_at }}</td>
						<td>
							{{ Form::open(['route' => ['messages.destroy', $message->id], 'method' => 'DELETE']) }}
								{{ Form::submit('Eliminar', ['class' => 'btn red']) }}
							{{ Form::close() }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</section>
</main>
@endsection