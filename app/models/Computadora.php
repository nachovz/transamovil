<?php

class Computadora extends Eloquent
{
	public function acceso()
    {
    	return $this->belongsTo('Acceso');
    }
   
}