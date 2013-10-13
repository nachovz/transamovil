<?php

class Archivo_usuario extends Eloquent
{
	protected $table = 'archivo_usuario';	

    public function archivos()
    {
        return $this->hasMany('Archivo');
    }

	public function usuarios()
    {
        return $this->hasMany('User');
    }
    
}