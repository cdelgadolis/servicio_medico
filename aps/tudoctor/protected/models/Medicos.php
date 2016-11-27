<?php

/**
 * This is the model class for table "medicos".
 *
 * The followings are the available columns in table 'medicos':
 * @property integer $id_medico
 * @property string $nombres
 * @property string $apellidos
 * @property integer $especialidad
 * @property string $telefono_oficina
 * @property string $telefono_celular
 * @property string $correo
 * @property boolean $status
 * @property string $nro_medico
 * @property integer $cant_paciente_dia
 * @property string $foto
 * @property string $fecha_creacion
 * @property integer $usuario_creacion
 * @property string $fecha_actualizacion
 * @property integer $usuario_actualizacion
 * @property integer $sede
 *
 * The followings are the available model relations:
 * @property MedicoHorario[] $medicoHorarios
 * @property Usuario $usuarioActualizacion
 * @property Usuario $usuarioCreacion
 * @property Especialidad $especialidad0
 * @property Sede $sede0
 */
class Medicos extends CActiveRecord
{
	
	public function getConcate()
{
return $this->nombres." ".$this->apellidos;

} 

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'medicos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('telefono_celular, correo, especialidad, cant_paciente_dia, nombres, apellidos, correo', 'required'),
			array('especialidad, cant_paciente_dia, usuario_creacion, usuario_actualizacion, sede', 'numerical', 'integerOnly'=>true),
			array('nombres, apellidos', 'length', 'max'=>100),
			array('telefono_oficina, telefono_celular', 'length', 'max'=>15),
			array('correo', 'email', 'message'=>"La dirección de Correo Electrónico es incorrecta"),
			array('correo, nro_medico', 'length', 'max'=>50),
			array('foto', 'length', 'max'=>200),
			array('status, fecha_creacion, fecha_actualizacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_medico, nombres, apellidos, especialidad, telefono_oficina, telefono_celular, correo, status, nro_medico, cant_paciente_dia, foto, fecha_creacion, usuario_creacion, fecha_actualizacion, usuario_actualizacion, sede', 'safe', 'on'=>'search'),
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
			'medicoHorarios' => array(self::HAS_MANY, 'MedicoHorario', 'medico'),
			'usuarioActualizacion' => array(self::BELONGS_TO, 'Usuario', 'usuario_actualizacion'),
			'usuarioCreacion' => array(self::BELONGS_TO, 'Usuario', 'usuario_creacion'),
			'especialidad0' => array(self::BELONGS_TO, 'Especialidad', 'especialidad'),
			'sede0' => array(self::BELONGS_TO, 'Sede', 'sede'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_medico' => 'N°',
			'nombres' => 'Nombres',
			'apellidos' => 'Apellidos',
			'especialidad' => 'Especialidad',
			'telefono_oficina' => 'Telefono Oficina',
			'telefono_celular' => 'Telefono Celular',
			'correo' => 'Correo',
			'status' => 'Status',
			'nro_medico' => 'Nro Medico',
			'cant_paciente_dia' => 'Cant Paciente Dia',
			'foto' => 'Foto',
			'fecha_creacion' => 'Fecha Creación',
			'usuario_creacion' => 'Usuario Creación',
			'fecha_actualizacion' => 'Fecha Actualización',
			'usuario_actualizacion' => 'Usuario Actualización',
			'sede' => 'Sede',
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
		$criteria->order = 'id_medico DESC';

		$criteria->compare('id_medico',$this->id_medico);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('especialidad',$this->especialidad);
		$criteria->compare('telefono_oficina',$this->telefono_oficina,true);
		$criteria->compare('telefono_celular',$this->telefono_celular,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('nro_medico',$this->nro_medico,true);
		$criteria->compare('cant_paciente_dia',$this->cant_paciente_dia);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('usuario_creacion',$this->usuario_creacion);
		$criteria->compare('fecha_actualizacion',$this->fecha_actualizacion,true);
		$criteria->compare('usuario_actualizacion',$this->usuario_actualizacion);
		$criteria->compare('sede',$this->sede);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Medicos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
