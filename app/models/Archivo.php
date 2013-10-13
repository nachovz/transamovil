<?php

class Archivo extends Eloquent
{
	public function archivo_usuarios()
    {
        return $this->hasMany('Archivo_usuario');
    }

    public function archivo_servicios()
    {
        return $this->hasMany('Archivo_servicio');
    }
}