<?php

class Computadora extends Eloquent
{
	public function usuario()
	{
		return $this->belongsTo('User');
	}

	public function accesos()
	{
		return $this->hasMany('Acceso');
	}   
}