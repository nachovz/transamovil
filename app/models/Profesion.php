<?php

class Profesion extends Eloquent
{
	protected $table = 'profesiones';	

	public function usuario()
    {
        return $this->belongsTo('User');
    }
    
}