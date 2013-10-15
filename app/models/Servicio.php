<?php

class Servicio extends Eloquent
{
	protected $table = "servicios";

	public function archivos()
	{
		return $this->belongsToMany('Archivo')->withPivot('label');
	}

	public function afiliaciones()
	{
		return $this->hasMany('Afiliacion');
	}

	public function transacciones()
	{
		return $this->hasMany('Transaccion');
	}
   
}