<?php

class Pais extends Eloquent
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'paises';

	public function estados()
	{
		return $this->hasMany('Estado');	
	}

}