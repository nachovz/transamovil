<?php

class Medio_de_pago_tarjeta extends Eloquent
{
	protected $table = 'medio_de_pago_tarjeta';	

	public function medios_de_pago()
    {
        return $this->hasMany('Medio_de_pago');
    }

}