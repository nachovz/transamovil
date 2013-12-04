<?php

class Ciudad extends Eloquent
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ciudades';

	public function estado()
	{
		return $this->belongsTo('Estado');
	}
}