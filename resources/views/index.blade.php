@extends('layouts.app')

@section('title', 'Fuerza Abarrotera Nacional')

@section('content')
<header id="home">
	<div class="hero">
		<div class="row">
			<div class="col m8 s12">
				<div class="valign-wrapper">
					<div class="container center">
						<h1 class="white-text bold title h2">Fuerza Abarrotera Nacional</h1>
						<img src="/img/logobco.png" class="responsive-img" alt="">
					</div>
				</div>
			</div>
			<div class="col m4 s12 orange">
				<div class="valign-wrapper">
					<div class="container">
						<h4 class="white-text justify section">Ser miembro <span class="bold">FAN</span> te hace <span class="bold">Mas Competitivo</span></h4>
						<div class="divider white" ></div>
						<h4 class="white-text justify section">Crece con <span class="bold">Ventas</span> Estratégicas y obtén <span class="bold">Mayores Ingresos</span></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<main>

	<section class="container">
		<div class="center">
			<h3 class="orange-text">Alianzas Actuales</h3>
			 <div class="carousel">
			    <a class="carousel-item" href="#one!"><img src="/img/tecate.png"></a>
			    <a class="carousel-item" href="#two!"><img src="/img/19.png"></a>
			    <a class="carousel-item" href="#three!"><img src="/img/penafiel.png"></a>
			    <a class="carousel-item" href="#four!"><img src="/img/tecate.png"></a>
			    <a class="carousel-item" href="#five!"><img src="/img/19.png"></a>
			    <a class="carousel-item" href="#six!"><img src="/img/penafiel.png"></a>
			 </div>
		</div>
	</section>

	<section class="container" id="register">
		<div class="center">
			<p class="blue-text bold">Cerca de</p>
			<h3 class="blue-text bold"><span class="orange-text">5000</span> puntos de venta en <span class="orange-text">7 estados</span></h3>
			<p class="grey-text">Aguascalientes, León, Tepic, Querétaro, Jalisco, Estado de México, CDMX</p>
		</div>
		<div class="row">
			<div class="col m6 s12">
				<h5 class="orange-text bold">¿Quienes somos?</h5>
				<p class="grey-text justify">Somos un frente unido de Abarroteros de San Ignacio Cerro Gordo. Creando Tienda FASI de Fuerza Abarrotera Nacional nos unimos en una familia que busca un crecimiento profesional en todo México.</p>
				<h5 class="orange-text bold">Objetivo</h5>
				<p class="grey-text justify">Reunir frente a frente a Proveedores y tiendas de abarrotes para hacer alianzas mejores para bien de los clientes.</p>
			</div>
			<div class="col m6 s12">
				<div class="card-panel blue center">
					<h5 class="white-text bold">¡Inscribete Ahora!</h5>
					{{ Form::open(['route' => 'messages.store', 'method' => 'POST']) }}
						<div class="input-field">
							{{ Form::label('name', 'Nombre') }}
							{{ Form::text('name', null) }}
						</div>
						<div class="input-field">
							{{ Form::label('phone', 'WhatsApp') }}
							{{ Form::tel('phone', null) }}
						</div>
						<div class="center">
							{{ Form::submit('Inscribete', ['class' => 'btn btn-block orange']) }}
						</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</section>

	<section class="container" id="benefits">
		<div class="center section">
			<h5 class="grey-text">Forma parte de la Comunidad de Fuerza Abarrotera Nacional y obtén grandes beneficios.</h5>
			<div class="row">
				<div class="col m5 s12">
					<img src="/img/tienda.png" class="responsive-img" alt="">
				</div>
				<div class="col m7 s12">
					<h5 class="orange-text title bold">Beneficios FAN</h5>
					<ol>
						<li class="grey-text justify">Descuentos y promociones especiales de acuerdo a negociaciones directas con las marcas y con las abarroteras.</li>
						<li class="grey-text justify">Atención y soporte personalizado en temas relacionados de compras con proveedores. </li>
						<li class="grey-text justify">Descuentos en establecimientos de diferentes ramas, en San Ignacio y sus alrededores (Restaurantes, Llantas, Etc.)</li>
						<li class="grey-text justify">Participar en las capacitaciones y programas únicos de crecimiento profesional. .</li>
					</ol>
					<div class="row">
						<div class="col m8 s12">
							<h5 class="orange-text">Y muchos mas...</h5>
						</div>
						<div class="col m4 s12">
							<img src="/img/logo.png" class="responsive-img" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section container center" id="blog">
		<h3 class="orange-text">Noticias</h3>
		<div class="row">
			@foreach($posts as $post)
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
		</div>
		<a href="{{ route('blog') }}" class="btn orange">Ver más</a>
	</section>

	<section class="section container center">
		<h4 class="blue-text">Ya Somos 690 Asociados y <span class="bold">¡Seguimos Creciendo!</span></h4>
		<h5 class="orange-text">San Ignacio Cerro Gordo <span class="title">Nuestro Orgullo</span></h5>
		<div class="row">
			<div class="col m6 s12">
				<div class="card-panel">
					<h4 class="orange-text">¡Inscribete Ahora!</h4>
					<p class="blue-text">Recibe promociones y descuentos al instante</p>
					{{ Form::open(['route' => 'messages.store', 'method' => 'POST']) }}
						<div class="input-field">
							{{ Form::label('name', 'Nombre') }}
							{{ Form::text('name', null) }}
						</div>
						<div class="input-field">
							{{ Form::label('phone', 'WhatsApp') }}
							{{ Form::tel('phone', null) }}
						</div>
						<div class="center">
							{{ Form::submit('Inscribete', ['class' => 'btn btn-block orange']) }}
						</div>
					{{ Form::close() }}
				</div>
			</div>
			<div class="col m6 s12">
				
				<div class="card-panel">
					<div class="row">
						<div class="col m3 s12">
							<img src="/img/javi.jpg" class="responsive-img" alt="">
						</div>
						<div class="col m9 s12 ">
							<blockquote class="grey-text">"Bienvenido a Fuerza Abarrotera Nacional, donde nos reunimos como tiendas de San Ignacio y en todo el país  buscando mejores condiciones para nuestros negocios y nuestras familias".</blockquote>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col m4 s12">
						<a href="http://bit.ly/2Ssiafg" class="i-f"><i class="fab fa-facebook-square fa-3x"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=5213481216767&text=Quiero%20m%E1s%20informaci%F3n" class="i-w"><i class="fab fa-whatsapp-square fa-3x"></i></a>
					</div>
					<div class="col m8 s12">
						<p class="orange-text bold right-align">Francisco Javier Orozco Morales</p>
						<p class="blue-text right-align">Coordinador TIENDA FASI Fuerza Abarrotera Nacional</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<footer class="page-footer blue overflow">
	<div class="container">
		<div class="row">
			<div class="col m4 s12">
				<p class="white-text justify">Fuerza Abarrotera Nacional con TIEDA FASI es un asociación que apoya a los Abarroteros de San Ignacio Cerro Gordo, Jalisco, en su desarrollo de empresa por México.</p>
			</div>
			<div class="col m4 s12">
				<div class="center">
					<img src="/img/logobco.png" class="responsive-img" alt="">
				</div>
			</div>
			<div class="col m4 s12">
				<p class="white-text right-align">Si no eres de San Ignacio Cerro Gordo pero cuentas con una tienda de Abarrotes y quieres pertenecer a nuestra Familia FAN, mándanos un mensaje al: (348) 121 6767</p>
			</div>
		</div>
		<div class="center">
			<p class="white-text small">2020 © Todos los derechos reservados <br>La Marca TIENDAFASI esta proceso de Registro ante IMPI</p>
		</div>
	</div>
</footer>
@endsection
