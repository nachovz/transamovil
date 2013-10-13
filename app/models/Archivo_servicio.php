<?php

class Archivo_servicio extends Eloquent
{
	protected $table = 'archivo_servicio';	

    public function archivos()
    {
        return $this->hasMany('Archivo');
    }

	public function servicios()
    {
        return $this->hasMany('Servicio');
    }
    
}