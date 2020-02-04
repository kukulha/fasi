@extends('layouts.app')

@section('title', 'Mensajes')

@section('content')
<main>
	<section class="section container ">
		<h4 class="orange-text center">Categorías</h4>
		<a href="{{ route('categories.create') }}" class="btn blue">Nueva</a>
		<table class="centered striped">
			<thead>
				<th>Nombre</th>
				<th>URL</th>
				<th colspan="2">Acciones</th>
			</thead>
			<tbody>
				@foreach($categories as $category)
					<tr>
						<td>{{ $category->name }}</td>
						<td>{{ $category->slug }}</td>
						<td><a href="{{ route('categories.edit', $category->id) }}" class="btn orange lighten-1">Editar</a></td>
						<td>
							{{ Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) }}
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