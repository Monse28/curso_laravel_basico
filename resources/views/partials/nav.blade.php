<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
	<div class="container">
		<a class="navbar-brand" href="{{ route('home') }}">
			{{ config('app.name') }}
		</a>
		<button class="navbar-toggler" type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent"
			aria-expanded="false"
			aria-label="{{ __('Toggle navigation') }}">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav nav-pills">
				<li class="nav-item">
					<a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">Home</a>
				</li>
				<li class=" nav-item">
					<a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ setActive('projects.*') }}" href="{{ route('projects.index') }}">Projects</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">Contacto</a>
				</li>
				@auth
					<li class="nav-item">
						<a class="nav-link"
						href="#"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">Cerrar Sesiòn</a>
					</li>
				@else
					<li class="nav-item">
						<a class="nav-link {{ setActive('login') }}"
						href="{{ route('login') }}">
						Login</a>
					</li>
				@endauth
			</ul>
		</div>
	</div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	@csrf
</form>