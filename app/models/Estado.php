<?php

class Estado extends Eloquent
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'estados';

	public function pais()
	{
		return $this->belongsTo('Pais');
	}

	public function municipios()
	{
		return $this->hasMany('Municipio');	
	}

	public function ciudades()
	{
		return $this->hasMany('Ciudad');	
	}
}