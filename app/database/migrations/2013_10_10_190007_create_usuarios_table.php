<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('usuarios', function($table)
        {
            $table->increments('id');
            $table->string('email',255)->nullable();
            $table->string('emaila',255)->nullable();
            $table->string('image_id')->nullable();
            $table->string('image_card')->nullable();
            $table->string('image_avatar')->nullable();
            $table->string('nombre', 120);
            $table->string('apellido', 200);
            $table->string('password', 60);
            $table->string('username', 40)->unique();
            $table->date('fecha_nacimiento');
            $table->string('transapin', 15);
            $table->enum('sexo', array('m', 'f'));
            $table->integer('profesion_id')->unsigned();
            $table->integer('campo_laboral_id')->unsigned();
            $table->enum('nivel_educativo', array('Primaria', 'Secundaria', 'TSU', 'Universitario'));
            $table->decimal('ingreso_mensual', 8, 2)->nullable()->default(0);
            $table->enum('estado_civil', array('Soltero', 'Casado', 'Viudo', 'Divorciado'));
            $table->integer('banco_default_id')->unsigned();
            $table->enum('tipo_documento', array('Pasaporte', 'Cédula', 'Extranjero', 'Juridico'));
            $table->string('nro_documento', 30);
            $table->string('pregunta_seguridad', 255);
            $table->string('respuesta_seguridad', 255);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('banco_default_id')->references('id')->on('bancos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('campo_laboral_id')->references('id')->on('campos_laborales')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('profesion_id')->references('id')->on('profesiones')->onDelete('cascade')->onUpdate('cascade');
        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
      Schema::drop('usuarios');
    }

}