<?php

class Medio_de_pago_tarjeta extends Eloquent
{
	protected $table = 'medio_de_pago_tarjeta';	

	public function medio_de_pago()
	{
		return $this->belongsTo('Medio_de_pago');
	}

}