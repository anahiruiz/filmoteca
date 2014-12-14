@section('breadcrumbs')
<li>
	<a href="/pages/servicios/index">
		Servicios
	</a>
</li>
<li class="active">
	Laboratorio digital
</li>
@stop





@section('content')

<div class="sidebar">
	@include('elements.menus.servicios', array('selected' => 6))
</div>

<div class="content">
	<div class="img-servicios">
		<img src="/assets/imgs/fragmentos.jpg" aling="left">
	</div>
	<h1>Laboratoro digital</h1>

	<p>Esta sección apoya principalmente a quienes tienen la intención de incorporar a sus trabajos imágenes en movimiento que no necesariamente forman parte de una ficción y/o ilustran de forma histórica y visual una idea.
	</p>

	<p>Para proporcionar estos fragmentos la base de datos para el Banco de imágenes se nutre con más de 12 mil registros de material de stock, es decir componentes cinematográficos que no necesariamente fueron editados, así como documentales, noticiero y películas de ficción en que los cambios del país se ven plasmados en imágenes. El acervo es tan variado que es posible encontrar todo tipo de imágenes desde 1896 hasta 1970, época en la que el formato de grabación cambió para dar paso al vídeo.
	</p>

	<p>El banco de imágenes es una ventana al acervo de la Filmoteca para que los realizadores e interesados en general puedan acceder a las imágenes y darlas a conocer.</p> 


	<p>Responsable: Nahún Calleros</p> 
	<p>Teléfono: 56 22 96 30 </p>
	<p>Correo electrónico: <a href="mailto:carriles@unam.mx">carriles@unam.mx</a></p>

	<p>*Para tener acceso a este departamentos consultar 
	{{ HTML::link(
		'/pages/servicios/lineamientos_generales_para_acceder_al_material',
		'Lineamientos para acceso al material.' )                            
		}}</p>
</div>

@stop