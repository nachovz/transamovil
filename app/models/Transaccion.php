<?php

class Transaccion extends Eloquent
{
	protected $table = 'transacciones';	

	public function usuarios()
    {
        return $this->hasMany('User');
    }

    public function afiliaciones()
    {
        return $this->hasMany('Afiliacion');
    }

    public function servicios()
    {
        return $this->hasMany('Servicio');
    }
    
}