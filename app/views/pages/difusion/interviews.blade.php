@extends('layouts.default')

@section('breadcrumbs')
<li>
	<a href="/press_register">
		Difusión
	</a>
</li>
<li class="active">
	La Filmoteca recomienda
</li>
@stop

@section('sidebar')
	@include('elements.menus.difusion', array('selected' => 5))
@stop


@section('content')

    {{ $page->body }}

@stop