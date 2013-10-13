<?php

class Campo_laboral extends Eloquent
{
	protected $table = 'campos_laborales';	

	public function usuario()
    {
        return $this->belongsTo('User');
    }
    
}