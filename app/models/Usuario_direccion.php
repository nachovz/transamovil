<?php

class Usuario_direccion extends Eloquent
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'usuario_direcciones';

	public function usuario()
	{
		return $this->belongsTo('User', 'usuario_id');
	}
}