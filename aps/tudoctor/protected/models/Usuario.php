<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $id_usuario
 * @property string $usuario
 * @property string $clave
 * @property string $nombre
 * @property string $apellido
 * @property string $telefono_oficina
 * @property string $telefono_celular
 * @property string $correo
 * @property boolean $estatus
 * @property string $perfil
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 * @property integer $fk_usuario_creacion
 * @property integer $fk_usuario_actualizacion
 *
 * The followings are the available model relations:
 * @property TipoTrabajador[] $tipoTrabajadors
 * @property TipoTrabajador[] $tipoTrabajadors1
 * @property Institucion[] $institucions
 * @property Institucion[] $institucions1
 * @property TipoPersona[] $tipoPersonas
 * @property TipoPersona[] $tipoPersonas1
 * @property Usuario $fkUsuarioActualizacion
 * @property Usuario[] $usuarios
 * @property Usuario $fkUsuarioCreacion
 * @property Usuario[] $usuarios1
 * @property Parentesco[] $parentescos
 * @property Parentesco[] $parentescos1
 * @property Paciente[] $pacientes
 * @property Paciente[] $pacientes1
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario, clave, nombre, apellido, telefono_celular, correo', 'required'),
			array('fk_usuario_creacion, fk_usuario_actualizacion', 'numerical', 'integerOnly'=>true),
			array('usuario', 'length', 'max'=>13),
			array('clave', 'length', 'max'=>80),
			array('nombre, apellido', 'length', 'max'=>70),
			array('telefono_oficina, telefono_celular', 'length', 'max'=>15),
			array('correo', 'length', 'max'=>50),
			array('perfil', 'length', 'max'=>20),
			array('estatus, fecha_creacion, fecha_actualizacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_usuario, usuario, clave, nombre, apellido, telefono_oficina, telefono_celular, correo, estatus, perfil, fecha_creacion, fecha_actualizacion, fk_usuario_creacion, fk_usuario_actualizacion', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tipoTrabajadors' => array(self::HAS_MANY, 'TipoTrabajador', 'usuario_actualizacion'),
			'tipoTrabajadors1' => array(self::HAS_MANY, 'TipoTrabajador', 'usuario_creacion'),
			'institucions' => array(self::HAS_MANY, 'Institucion', 'usuario_actualizacion'),
			'institucions1' => array(self::HAS_MANY, 'Institucion', 'usuario_creacion'),
			'tipoPersonas' => array(self::HAS_MANY, 'TipoPersona', 'usuario_actualizacion'),
			'tipoPersonas1' => array(self::HAS_MANY, 'TipoPersona', 'usuario_creacion'),
			'fkUsuarioActualizacion' => array(self::BELONGS_TO, 'Usuario', 'fk_usuario_actualizacion'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'fk_usuario_actualizacion'),
			'fkUsuarioCreacion' => array(self::BELONGS_TO, 'Usuario', 'fk_usuario_creacion'),
			'usuarios1' => array(self::HAS_MANY, 'Usuario', 'fk_usuario_creacion'),
			'parentescos' => array(self::HAS_MANY, 'Parentesco', 'usuario_actualizacion'),
			'parentescos1' => array(self::HAS_MANY, 'Parentesco', 'usuario_creacion'),
			'pacientes' => array(self::HAS_MANY, 'Paciente', 'fk_usuario_creacion'),
			'pacientes1' => array(self::HAS_MANY, 'Paciente', 'fk_usuario_actualizacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_usuario' => 'Id Usuario',
			'usuario' => 'Usuario',
			'clave' => 'Clave',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'telefono_oficina' => 'Telefono Oficina',
			'telefono_celular' => 'Telefono Celular',
			'correo' => 'Correo',
			'estatus' => 'Estatus',
			'perfil' => 'Perfil',
			'fecha_creacion' => 'Fecha Creacion',
			'fecha_actualizacion' => 'Fecha Actualizacion',
			'fk_usuario_creacion' => 'Fk Usuario Creacion',
			'fk_usuario_actualizacion' => 'Fk Usuario Actualizacion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('clave',$this->clave,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('telefono_oficina',$this->telefono_oficina,true);
		$criteria->compare('telefono_celular',$this->telefono_celular,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('estatus',$this->estatus);
		$criteria->compare('perfil',$this->perfil,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_actualizacion',$this->fecha_actualizacion,true);
		$criteria->compare('fk_usuario_creacion',$this->fk_usuario_creacion);
		$criteria->compare('fk_usuario_actualizacion',$this->fk_usuario_actualizacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}



	public function validatePassword($password){
	return $this->hashPassword($password)===$this->clave;
}

	public function hashPassword($password){
	return md5($password);
}
	
	
	
	
}
