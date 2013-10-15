<?php

class Medio_de_pago extends Eloquent
{
	protected $table = 'medios_de_pago';	

	public function usuario()
	{
		return $this->belongsTo('User');
	}

	public function banco()
	{
		return $this->belongsTo('Banco');
	}

	public function tarjeta()
	{
		return $this->hasOne('Medio_de_pago_tarjeta');
	}
}