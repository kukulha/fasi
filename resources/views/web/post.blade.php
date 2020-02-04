@extends('layouts.app')

@section('title')
{{ $post->name }}
@endsection

@section('content')
<main>
	<article>
		<div class="container">
			<div class="center">
				<img src="{{ Storage::url($post->file) }}" alt="">
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
</main>
@endsection