@extends('layouts.default')

@section('scripts')

	{{ HTML::script('/apps/require.config.js')}}

	{{ HTML::script(
		'/bower_components/requirejs/require.js', 
		['data-main' =>'/apps/pages/filmoteca-medal/App.js'])
	}}
	

	{{-- 
		Este modulo local regresara un lista de ganadores de la medalla filmoteca.
		Definiendo así ganamos dos cosas. La primera, se evita hacer otra 
		soliciturd al servidor para recuperar la lista de ganadores. Y la otra,
		hace que nuestra lista de ganadores sea una variable local en vez de una
		global.
	--}}
	<script>
		define('filmoteca.winners', [], {{ $winners->toJson() }} )
	</script>

	<script type="text/ng-template" id="filmoteca_medals.modal.html">
		@include('filmoteca_medals.modal')
	</script>
@stop

@section('styles')

	{{ HTML::styles(array(
		'/bower_components/angucomplete-alt/angucomplete-alt.css',
		'/bower_components/jqueryui/themes/ui-lightness/jquery-ui.min.css',
		'/bower_components/jquery-ui-slider-pips/dist/jquery-ui-slider-pips.css')) }}
@stop

@section('breadcrumbs')
	<li>
		<a href="/pages/quienes-somos/medalla-filmoteca">Quiénes somos</a>
	</li>
	<li>
		<a href="/pages/quienes-somos/medalla-filmoteca">Medalla Filmoteca</a>
	</li>
	<li class="active">
		Galardonados
	</li>
@stop

{{----------------------------------------------------------------------------}}
{{-- Main Content															--}}
{{----------------------------------------------------------------------------}}

@section('sidebar')
	@include('elements.menus.quienes-somos', array('selected' => 5))
@stop

@section('content')

<h1>Galardonados - Medalla Filmoteca UNAM</h1>
<br>
<br>
<div class="search-autocomplete pull-right">
		<span class="glyphicon glyphicon-search pull-left ng-cloak">
		
			<angucomplete-alt
				placeholder="Buscar galardonado por nombre..."
				pause="0"
				selected-object="selectedAdvice"
				local-data="winners"
				title-field="name"
				description-field="award_date"
				search-fields="name"
				image-field="photo"
				minlength="1"
				text-searching="Buscando..."
				text-no-results="Ninguna ganador encontrado"
				input-class="form-control form-control-small">
			</angucomplete-alt>
		
		</span>
	</div>
<br>
<br>
<br>

	<p>Ver galardonado por año:</p><br>
<div class="filmoteca-medal-slider">
	<div data-slider-pips
		config="sliderConfig"
		ng-model="year">
	</div>
</div>

<div>


	<div class="clearfix"></div>
</div>
<div class="loading" ng-show="loading"></div>





<div class="filmoteca-medal-list ng-cloak">
	<div class="wrapper-items" id="wrapper-items">

		<ul class="items" id="items">
			
			{{-- No podemos usar ng-repeat porque necesitamos la url de la 
			imagen y esta solamente esta disponible al llamar una función
			en el modelo eloquent.--}}

			@foreach( $winners as $index => $winner )

			<li class="thumbnail item"
				ng-show="winners[{{ $index }}].visible">

				<img src="{{ $winner->image->url('thumbnail') }}"
					alt="{{ $winner->name }}">
				{{ 
					HTML::link(
					'filmoteca-medal/' . $winner->id . '/detail',
					str_limit($winner->name, 20),
					array(
						'title' => 'Ver detalles',
						'ng-click' => 'show("' . $index . '")',
						'onclick' => 'return false'
						)
					)
				}}
			</li>

			@endforeach
		</ul>
	</div>
</div>
@stop