@extends('layouts.app')

@section('title', 'Crear nueva categotría')

@section('content')
<main>
	<section class="section container">
		<h4 class="orange-text">Editar Artículo</h4>
		<div class="row">
			<div class="col m8 s12 offset-m2">
				<div class="card-panel">
					{{ Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'put', 'files' => 'true']) }}
						@include('admin.posts.partials.form')
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</section>
</main>
@endsection