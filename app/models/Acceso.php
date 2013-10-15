<?php

class Acceso extends Eloquent
{
    public function computadora()
    {
      return $this->belongsTo('Computadora');
    }

}