<?php

class Servicio extends Eloquent
{
	public function archivo_servicio()
    {
    	return $this->belongsTo('Archivo_servicio');
    }

    public function afiliacion()
    {
    	return $this->belongsTo('Afiliacion');
    }

    public function transaccion()
    {
    	return $this->belongsTo('Transaccion');
    }
   
}