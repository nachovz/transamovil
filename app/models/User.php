<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'usuarios';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function telefonos()
	{
		return $this->hasMany('Usuario_telefono');
	}

	public function medios_de_pago()
	{
		return $this->hasMany('Medios_de_pago');
	}

	public function archivos()
	{
		return $this->belongsToMany('Archivo')->withPivot('label');
	}

	public function afiliaciones()
	{
		return $this->hasMany('Afiliacion', 'usuario_id');
	}

	public function transacciones()
	{
		return $this->hasMany('Transaccion');
	}

	public function banco()
	{
		return $this->belongsTo('Banco');
	}

	public function campo_laboral()
	{
		return $this->belongsTo('Campo_laboral');
	}

	public function profesion()
	{
		return $this->belongsTo('Profesion');
	}    
}