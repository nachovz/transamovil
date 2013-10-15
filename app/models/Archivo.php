<?php

class Archivo extends Eloquent
{
	public function servicios()
	{
		return $this->belongsToMany('Servicio');
	}

	public function usuarios()
	{
		return $this->belongsToMany('User');
	}


}