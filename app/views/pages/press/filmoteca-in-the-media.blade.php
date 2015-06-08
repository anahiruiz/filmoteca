@extends('layouts.default')

@section('breadcrumbs')
<li>
	<a>
		Difusión
	</a>
</li>
<li class="active">
	Filmoteca en los Medios
@stop

@section('sidebar')
	@include('elements.menus.press', array('selected' => 4))
@stop


@section('content')

    {{ $page->body }}

@stop