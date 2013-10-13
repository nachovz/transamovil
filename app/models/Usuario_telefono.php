<?php

class Usuario_telefono extends Eloquent
{
	public function usuario()
    {
        return $this->belongsTo('User');
    }
}