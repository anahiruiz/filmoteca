
@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/index">
			Difusión
		</a>
	</li>
	<li class="active">
		Exposiciones / Exposiciones recientes
	</li>
@stop


@section('sidebar')
	@include('elements.menus.press', array('selected' => 1))
@stop


@section('content')

    {{ $page->body }}

@stop