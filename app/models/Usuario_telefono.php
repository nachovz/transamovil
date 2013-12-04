<?php

class Usuario_telefono extends Eloquent
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'usuario_telefonos';

	public function usuario()
	{
		return $this->belongsTo('User', 'usuario_id');
	}
}