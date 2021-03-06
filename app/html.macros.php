<?php

/**
 * Recibe un array de links hacia scripts.
 * Cada entrada puede ser o una url hacia el script
 * o un array cuya primer entrada es un link y cuya
 * segunda entrada es una lista de atributos.
 * @var array
 */
HTML::macro('scripts', function($scripts = array()){

	return HTML::resource('script', $scripts);

});

HTML::macro('styles', function($styles = array())
{
	return HTML::resource('style', $styles);
});

HTML::macro('resource', function($type, $list = array())
{
	if( $type != 'script' && $type != 'style') return '';

	$html = '';

	foreach($list as $element)
	{
		if( is_string($element))
		{
			$html .= HTML::{$type}( $element );
		}else{
		
			if (!isset($element[1]))
			{
				$element[1] = array();
			}

			$html .= HTML::{$type}( $element[0], $element[1]);
		}
	}

	return $html;
});

HTML::macro('metatags', function( $metas )
{
	return '';
});