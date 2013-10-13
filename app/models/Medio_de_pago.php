<?php

class Medio_de_pago extends Eloquent
{
	protected $table = 'medios_de_pago';	

	public function usuarios()
    {
        return $this->hasMany('User');
    }

    public function bancos()
    {
        return $this->hasMany('Banco');
    }

    public function medio_de_pago_tarjeta()
    {
        return $this->belongsTo('Medio_de_pago_tarjeta');
    }
}