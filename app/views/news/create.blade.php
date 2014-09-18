@section('content')

{{ Form::open( 
	[
		'route' => 'admin.news.store', 
		'files' => true,
		'method'=> 'POST',
		'class' => 'form-horizontal panel panel-default'
	])}}

	<div class="panel-heading">
		<h2>Agregar Noticia</h2>
	</div>
	
	<div class="panel-body">

	{{ Form::formGroup('text','title','Título', 'news_form') }}

	{{ Form::formGroup('textarea','body','Noticia', 'news_form') }}

	{{ Form::formGroup('file','image', 'Icono', 'news_form')}}

	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Agregar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop