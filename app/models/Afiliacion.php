<?php

class Afiliacion extends Eloquent
{
	protected $table = 'afiliaciones';	

	public function usuario()
    {
        return $this->belongsTo('User');
    }

    public function servicio()
    {
        return $this->belongsTo('Servicio');
    }

    public function transacciones()
    {
    	return $this->hasMany('Transaccion');
    }
    
}