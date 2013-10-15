<?php

class Profesion extends Eloquent
{
	protected $table = 'profesiones';	

	public function usuarios()
	{
		return $this->hasMany('User');
	}
    
}