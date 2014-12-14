@extends('layouts.default')

@section('scripts')
	{{ HTML::script('/assets/js/home.js')}}
	{{ HTML::script('/assets/js/facebook.js')}}
	{{ HTML::script('/assets/js/twitter.js')}}
@stop

@section('content')

<div class="row">
	<br><br>
	<div class="col-sm-12">
		@include('pages.home.partials.carousel')
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-4">
		@include('pages.home.partials.the-last')
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		@include('pages.home.partials.filmoteca-invite')
	</div>

	<div class="col-xs-12 col-sm-12 col-md-4">
		<div class="row">
			<div class="col-sm-6 col-md-12">
				@include('pages.home.partials.programming')
			</div>
			<div class="col-sm-6 visible-sm">
				@include('pages.home.partials.other-news')
			</div>
			<div class="col-sm-6 visible-sm">
				@include('pages.home.partials.visit')
			</div>
		</div>
	</div>
</div>

<div class="row hidden-sm">
	<div class="col-sm-12 col-md-4">
		@include('pages.home.partials.other-news')
	</div>
	<div class="col-sm-12 col-md-8">
		@include('pages.home.partials.visit')
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-8">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="flm-section expositions">
					<div class="content">
						<div class="header">
							<h3>Centro de documentación</h3><small>Abierto al público en general</small>
							<span class="see-more"><a href="">Ver más</a></span>
						</div>
						<div class="image">
							<img src="/imgs/jill.jpg" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="flm-section expositions">
					<div class="content">
						<div class="header">
							<h3>Exposiciones</h3>
							<h5>Cine surealismo</h5>
							<span>Sede: Filmoteca UNAM</span><span class="see-more"><a href="">Ver más</a></span>
						</div>
						<div class="image">
							<img src="/imgs/dead-nation.jpg">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="well well-sm">
					<h4 class="text-center"><a href="http://cineunam.librosdelau.com/">Tienda en línea</a></h4>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="well well-sm">
					<h4 class="text-center"><a href="http://www.libros.unam.mx/">Libros UNAM</a></h4>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4">
		@include('pages.home.partials.social-networks')
	</div>
</div>

<div class="row">
	@include('pages.home.partials.friend-sites')
</div>


<div class="toolbar-fixed social-networks-toolbar visible-lg">
	<a href="https://twitter.com/ButacaUNAM"><span class="icon-twitter"></span></a>
	<a href="https://www.facebook.com/FilmotecaUNAM"><span class="icon-facebook"></span></a>
	<a href="https://www.youtube.com/user/FilmotecaUNAM"><span class="icon-youtube"></span></a>
	<a href="http://vimeo.com/filmotecaunam/videos"><span class="icon-vimeo"></span></a>
	<a href="https://plus.google.com/117296642645060485198/posts"><span class="icon-google-plus"></span></a>
</div>

<div class="ceil-toolbar toolbar-fixed visible-lg">
	<div class="text-center"><a class="icon-arrow-above" href="#main-header"></a></div>
	<span>arriba</span>
</div>

@stop