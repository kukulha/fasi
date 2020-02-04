@extends('layouts.app')

@section('title', 'Crear nueva categotría')

@section('content')
<main>
	<section class="section container">
		<h4 class="orange-text">Crear nueva Categoría</h4>
		<div class="row">
			<div class="col m8 s12 offset-m2">
				<div class="card-panel">
					{{ Form::open(['route' => 'categories.store', 'method' => 'post']) }}
						@include('admin.categories.partials.form')
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</section>
</main>
@endsection