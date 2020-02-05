@extends('layouts.app')

@section('title', 'Noticias')



@section('content')
<main>
	<section class="section container">
		<div class="row">
			<h3 class="orange-text center">Noticias</h3>
			<div class="col m10 s12">
				@if($posts->isEmpty())
					<em>No hay posts en esta categoría</em>
				@else
				@foreach($posts as $post)
					<div class="col m6 s12">
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
			<div class="col m2 s12">
				<h5 class="blue-text">Categorías</h5>
				<ul>
				@foreach($categories as $category)
					<li><a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a></li>
				@endforeach
				</ul>
			</div>
		</div>
		<div class="center">
			{{ $posts->render('pagination::default') }}
		</div>
	</section>
</main>
@endsection