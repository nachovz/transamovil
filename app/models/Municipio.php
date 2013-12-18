<?php

class Municipio extends Eloquent
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'municipios';

	public function estado()
	{
		return $this->belongsTo('Estado');
	}
}