<?php

/**
 * This is the model class for table "sede".
 *
 * The followings are the available columns in table 'sede':
 * @property integer $id_sede
 * @property string $sede
 * @property string $direccion
 * @property integer $estado
 * @property string $foto_sede
 * @property string $horario_entrada
 * @property string $horario_salida
 * @property string $contacto
 * @property string $correo_sede
 * @property string $nombre_responsable
 * @property integer $cedula_responsable
 * @property boolean $es_activo
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 * @property integer $fk_usuario_creacion
 * @property integer $fk_usuario_actualizacion
 * @property string $telefono_1
 * @property string $telefono_2
 * @property string $telefono_3
 *
 * The followings are the available model relations:
 * @property SedeFoto[] $sedeFotos
 * @property Especialidad[] $especialidads
 * @property Solicitud[] $solicituds
 * @property Actividad[] $actividads
 * @property Estado $estado0
 * @property Usuario $fkUsuarioActualizacion
 * @property Usuario $fkUsuarioCreacion
 */
class Sede extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sede';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sede, estado, direccion, telefono_1, correo_sede, horario_entrada, horario_salida , nombre_responsable, contacto', 'required'),
			array('estado, cedula_responsable, fk_usuario_creacion, fk_usuario_actualizacion', 'numerical', 'integerOnly'=>true),
			array('sede, contacto, correo_sede', 'length', 'max'=>100),
			array('correo_sede', 'email', 'message'=>"La dirección de Correo Electrónico es incorrecta"),
			array('direccion', 'length', 'max'=>500),
			array('nombre_responsable', 'length', 'max'=>50),
			array('telefono_1, telefono_2, telefono_3', 'length', 'max'=>15),
			array('foto_sede, horario_entrada, horario_salida, es_activo, fecha_creacion, fecha_actualizacion', 'safe'),
			
			//array('foto_sede', 'length', 'max' => 255, 'tooLong' => '{attribute} el nombre del archivo es muy largo (max {max} caracteres).', 'on' => 'insert,upload'),
			//array('foto_sede', 'file', 'types' => 'jpg,jpeg,gif,png', 'maxSize' => 1024 * 1024 * 2, 'tooLarge' => 'La foto debe ser menor a 2MB !!!', 'on' => 'insert, upload'),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_sede, sede, direccion, estado, foto_sede, horario_entrada, horario_salida, contacto, correo_sede, nombre_responsable, cedula_responsable, es_activo, fecha_creacion, fecha_actualizacion, fk_usuario_creacion, fk_usuario_actualizacion, telefono_1, telefono_2, telefono_3', 'safe', 'on'=>'search'),
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
			'sedeFotos' => array(self::HAS_MANY, 'SedeFoto', 'fk_sede'),
			'especialidads' => array(self::HAS_MANY, 'Especialidad', 'sede'),
			'solicituds' => array(self::HAS_MANY, 'Solicitud', 'fk_sede'),
			'actividads' => array(self::HAS_MANY, 'Actividad', 'fk_sede'),
			'estado0' => array(self::BELONGS_TO, 'Estado', 'estado'),
			'fkUsuarioActualizacion' => array(self::BELONGS_TO, 'Usuario', 'fk_usuario_actualizacion'),
			'fkUsuarioCreacion' => array(self::BELONGS_TO, 'Usuario', 'fk_usuario_creacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_sede' => 'N°',
			'sede' => 'Sede',
			'direccion' => 'Dirección',
			'estado' => 'Estado',
			'foto_sede' => 'Foto Sede',
			'horario_entrada' => 'Horario Entrada',
			'horario_salida' => 'Horario Salida',
			'contacto' => 'Contacto',
			'correo_sede' => 'Correo',
			'nombre_responsable' => 'Nombre Responsable',
			'cedula_responsable' => 'Cedula Responsable',
			'es_activo' => 'Estatus',
			'fecha_creacion' => 'Fecha Creación',
			'fecha_actualizacion' => 'Fecha Actualización',
			'fk_usuario_creacion' => 'Usuario Creación',
			'fk_usuario_actualizacion' => 'Usuario Actualización',
			'telefono_1' => 'Teléfono 1',
			'telefono_2' => 'Teléfono 2',
			'telefono_3' => 'Teléfono 3',
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
		$criteria->order = 'id_sede DESC';

		$criteria->compare('id_sede',$this->id_sede);
		$criteria->compare('sede',$this->sede,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('foto_sede',$this->foto_sede,true);
		$criteria->compare('horario_entrada',$this->horario_entrada,true);
		$criteria->compare('horario_salida',$this->horario_salida,true);
		$criteria->compare('contacto',$this->contacto,true);
		$criteria->compare('correo_sede',$this->correo_sede,true);
		$criteria->compare('nombre_responsable',$this->nombre_responsable,true);
		$criteria->compare('cedula_responsable',$this->cedula_responsable);
		$criteria->compare('es_activo',$this->es_activo);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_actualizacion',$this->fecha_actualizacion,true);
		$criteria->compare('fk_usuario_creacion',$this->fk_usuario_creacion);
		$criteria->compare('fk_usuario_actualizacion',$this->fk_usuario_actualizacion);
		$criteria->compare('telefono_1',$this->telefono_1,true);
		$criteria->compare('telefono_2',$this->telefono_2,true);
		$criteria->compare('telefono_3',$this->telefono_3,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sede the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
