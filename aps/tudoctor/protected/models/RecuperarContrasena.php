<?php

class RecuperarContrasena extends CActiveRecord{
	
	public $verifyCode;
	public $usuario;
	public $correo_ppal;
		
	public function tableName()
	{
		return 'usuario';
	}

	public function rules(){
	return array(
	array('usuario, correo_ppal, telefono_celular', 'required', 'message'=>"El campo es requerido"),
	array('usuario', 'length', 'min'=>6, 'except' => 'changePwd'),
	array('usuario', 'numerical', 'integerOnly'=>true, 'message'=>'El RIF se debe colocar sin letras, espacios, ni guiones.'),
	array('correo_ppal', 'email', 'message'=>"La dirección de Correo Electrónico es incorrecta"),
	array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements(), 'except' => 'changePwd'),
	);
	}

	public function attributeLabels()
	{
		return array(
			'usuario' => 'RIF',
			'telefono_celular' => 'Teléfono Celular',
			'correo_ppal' => 'Correo Principal',
			'verifyCode' => 'Codigo de Verificación'
		);
	}

}
