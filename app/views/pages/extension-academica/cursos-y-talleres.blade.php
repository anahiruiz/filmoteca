@section('breadcrumbs')
<li>
  <a href="/pages/extencion-academica/index">
    Extensión Academica
  </a>
</li>
<li class="active">
  Cursos y talleres.
</li>
@stop





@section('content')

<div class="sidebar">
  @include('elements.menus.extension-academica', array('selected' => 1))
</div>

<h1>Cursos organizados por la DGAC</h1>

@stop