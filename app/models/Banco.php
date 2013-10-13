<?php

class Banco extends Eloquent
{
	public function usuario()
    {
        return $this->belongsTo('User');
    }

    public function medio_de_pago()
    {
        return $this->belongsTo('Medio_de_pago');
    }
}