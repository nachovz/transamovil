<?php

class Acceso extends Eloquent
{
	public function usuarios()
    {
        return $this->hasMany('User');
    }

    public function computadoras()
    {
        return $this->hasMany('Computadora');
    }

}