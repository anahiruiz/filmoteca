<?php namespace Filmoteca\Models\Exhibitions;

use Eloquent;

use Filmoteca\Genre;

class Exhibition extends Eloquent
{
	public function exhibitionFilm()
	{
		return $this->belongsTo('Filmoteca\Models\Exhibitions\ExhibitionFilm');
	}

	public function type()
	{
		return $this->belongsTo('Filmoteca\Models\Exhibitions\Type');
	}

	public function schedules()
	{
		return $this->hasMany('Filmoteca\Models\Exhibitions\Schedule')->with('auditorium');
	}

	public function auditoriums()
	{
		return $this->hasManyThrough('Filmoteca\Models\Exhibitions\Auditorium', 'Schedule');
	}

	public function getTechnicalCard()
	{
		$genresList = Genre::all(array('id','name'))
			->lists('name','id');

		$tc = array(); //tecnicalCard.

		$film = $this->exhibition_film->film;

		$tc['título'] 	= $film->title;

		$tc['año'] 		= $film->year;

		$tc['pais'] 	= $film->country_id;

		$tc['duración'] = $film->duration;

		$tc['género']	= $genresList[$film->genre_id];

		$tc['director']	= $film->director;

		$tc['guión']	= $film->script;

		$tc['fotografía'] = $film->photographic;

		$tc['música'] 	= $film->music;

		$tc['edición']	= $film->edition;

		$tc['producción'] = $film->production;

		$tc['reparto']	= $film->cast;

		$tc['sinopsis']	= $film->synopsis;

		$technicalCard = array();

		foreach( $tc as $key => $value)
		{
			if( !empty($value) )
			{
				$technicalCard[$key] = $value;
			}
		}

		return $technicalCard;
	}
}