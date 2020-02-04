@extends('layouts.app')

@section('title', 'Mensajes')

@section('content')
<main>
	<section class="section container ">
		<h4 class="orange-text center">Artículos</h4>
		<a href="{{ route('posts.create') }}" class="btn blue">Nuevo</a>
		<table class="centered striped">
			<thead>
				<th>Titulo</th>
				<th>URL</th>
				<th>Extracto</th>
				<th>Categoría</th>
				<th colspan="2">Acciones</th>
			</thead>
			<tbody>
				@foreach($posts as $post)
					<tr>
						<td>{{ $post->name }}</td>
						<td>{{ $post->slug }}</td>
						<td>{{ $post->excerpt }}</td>
						<td>{{ $post->category->name }}</td>
						<td width="10px"><a href="{{ route('posts.edit', $post->id) }}" class="btn orange lighten-1">Editar</a></td>
						<td width="10px">
							{{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) }}
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