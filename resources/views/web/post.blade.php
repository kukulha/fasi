@extends('layouts.app')

@section('title')
{{ $post->name }}
@endsection

@section('content')
<main>
	<article>
		<div class="container">
			<div class="center">
				<img src="{{ Storage::url($post->file) }}" class="responsive-img" alt="">
				<h1 class="orange-text">{{ $post->name }}</h1>
			</div>

			<p class="blue-text">Autor: <span class="grey-text">{{ $post->user->name }}</span></p>
			<p class="blue-text">Categoría: <span class="grey-text">{{ $post->category->name }}</span></p>
			<div class="divider orange"></div>
			<p class="grey-text">{{ $post->excerpt  }} </p>
			<div class="divider orange"></div>
			<p class="grey-text">{!! $post->body !!}</p>
		</div>
	</article>
	<section class="section container center">
		<h4 class="orange-text">Relacionados</h4>
		<div class="row">
			@if($related->isEmpty())
				<em>No hay Post relacionados</em>
			@else
				@foreach($related as $post)
					<div class="col m4 s12">
						<div class="card">
							<div class="card-image">
								<img src="{{ Storage::url($post->file) }}" alt="">
							</div>
							<div class="card-content">
								<a class="card-title orange-text" href="{{ route('post', $post->slug) }}">{{ $post->name }}</a>
							</div>
						</div>
					</div>
				@endforeach
			@endif
		</div>
	</section>
</main>
@endsection