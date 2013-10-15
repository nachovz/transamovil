<?php

class Banco extends Eloquent
{
	public function usuarios_default()
  {
    return $this->hasMany('User');
  }

  public function medios_de_pago()
  {
    return $this->hasMany('Medio_de_pago');
  }
}