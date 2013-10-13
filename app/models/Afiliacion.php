<?php

class Afiliacion extends Eloquent
{
	protected $table = 'afiliaciones';	

	public function usuarios()
    {
        return $this->hasMany('User');
    }

    public function servicios()
    {
        return $this->hasMany('Servicio');
    }

    public function transaccion()
    {
    	return $this->belongsTo('Transaccion');
    }
    
}