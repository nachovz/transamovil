<?php

class Transaccion extends Eloquent
{
	protected $table = 'transacciones';	

	public function usuario()
	{
		return $this->belongsTo('User');
	}

	public function afiliacion()
	{
		return $this->belongsTo('Afiliacion');
	}

	public function servicio()
	{
		return $this->belongsTo('Servicio');
	}    
}