<?php

class Computadora extends Eloquent
{
	public function usuario()
	{
		return $this->belongsTo('User', 'usuario_id');
	}

	public function accesos()
	{
		return $this->hasMany('Acceso');
	}   
}