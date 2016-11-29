<?php

class BuscarPaciente extends CActiveRecord{
	
	public $cedula;
		
	public function tableName()
	{
		return 'paciente';
	}

	public function rules(){
	return array(
	array('cedula', 'required'),
	array('cedula', 'numerical', 'integerOnly'=>true, 'message'=>'Campo numerico.'),
	);
	}

	public function attributeLabels()
	{
		return array(
			'cedula' => 'Cédula',
		);
	}

}
