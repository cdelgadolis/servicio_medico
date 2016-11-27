<?php

class Home extends CActiveRecord{
	
	public $cedula;
			
	public function tableName()
	{
		return 'paciente';
	}

	public function rules(){
	return array(
	array('cedula', 'required', 'message'=>"El campo es requerido"),
	array('cedula', 'length', 'max'=>8, 'except' => 'changePwd'),
	array('cedula', 'numerical', 'integerOnly'=>true, 'message'=>'El número de cédula se debe colocar sin letras, espacios, ni guiones.'),
	);
	}

	public function attributeLabels()
	{
		return array(
			'cedula' => 'Cédula',
		);
	}

}
