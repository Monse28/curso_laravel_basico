@extends('layout')

@section('title', 'About')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6">
				<img class="img-fluid mb-4" src="/img/about.svg" alt="Desarrollo Web">
			</div>
			<div class="col-12 col-lg-6">
				<h1 class="display-4 text-primary">Quienes somos</h1>
				<p class="lead text-secondary">
					Esta es una pagìna que se encarga de mostrar diferentes proyectos aprendidos durante los cursos desarrollados por laravel
				</p>
				<a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contactame</a>
				<a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
			</div>
		</div>
	</div>
@endsection