<?php

/**
 * This is the model class for table "actividad".
 *
 * The followings are the available columns in table 'actividad':
 * @property integer $id_actividad
 * @property string $actividad
 * @property string $lugar
 * @property string $responsable
 * @property string $hora_entrada
 * @property string $hora_salida
 * @property string $fecha_entrada
 * @property string $fecha_salida
 * @property integer $fk_estatus
 * @property boolean $es_activo
 * @property string $fecha_creacion
 * @property integer $usuario_creacion
 * @property string $fecha_actualizacion
 * @property integer $usuario_actualizacion
 * @property integer $fk_sede
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property Usuario $usuarioActualizacion
 * @property Usuario $usuarioCreacion
 * @property Sede $fkSede
 */
class Actividad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'actividad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('actividad, lugar, responsable, hora_entrada, fecha_entrada, fecha_salida, fk_sede', 'required'),
			array('fk_estatus, usuario_creacion, usuario_actualizacion, fk_sede', 'numerical', 'integerOnly'=>true),
			array('actividad', 'length', 'max'=>250),
			array('lugar, responsable', 'length', 'max'=>100),
			array('hora_entrada, hora_salida', 'length', 'max'=>8),
			array('es_activo, fecha_creacion, fecha_actualizacion, descripcion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_actividad, actividad, lugar, responsable, hora_entrada, hora_salida, fecha_entrada, fecha_salida, fk_estatus, es_activo, fecha_creacion, usuario_creacion, fecha_actualizacion, usuario_actualizacion, fk_sede, descripcion', 'safe', 'on'=>'search'),
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
			'usuarioActualizacion' => array(self::BELONGS_TO, 'Usuario', 'usuario_actualizacion'),
			'usuarioCreacion' => array(self::BELONGS_TO, 'Usuario', 'usuario_creacion'),
			'fkSede' => array(self::BELONGS_TO, 'Sede', 'fk_sede'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_actividad' => 'N°',
			'actividad' => 'Actividad',
			'lugar' => 'Lugar',
			'responsable' => 'Responsable',
			'hora_entrada' => 'Hora Inicio',
			'hora_salida' => 'Hora Final',
			'fecha_entrada' => 'Fecha Desde',
			'fecha_salida' => 'Fecha Hasta',
			'fk_estatus' => 'Estatus',
			'es_activo' => 'Activo',
			'fecha_creacion' => 'Fecha Creación',
			'usuario_creacion' => 'Usuario Creación',
			'fecha_actualizacion' => 'Fecha Actualización',
			'usuario_actualizacion' => 'Usuario Actualización',
			'fk_sede' => 'Sede',
			'descripcion' => 'Descripción',
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
		$criteria->order = 'id_actividad DESC';

		$criteria->compare('id_actividad',$this->id_actividad);
		$criteria->compare('actividad',$this->actividad,true);
		$criteria->compare('lugar',$this->lugar,true);
		$criteria->compare('responsable',$this->responsable,true);
		$criteria->compare('hora_entrada',$this->hora_entrada,true);
		$criteria->compare('hora_salida',$this->hora_salida,true);
		$criteria->compare('fecha_entrada',$this->fecha_entrada,true);
		$criteria->compare('fecha_salida',$this->fecha_salida,true);
		$criteria->compare('fk_estatus',$this->fk_estatus);
		$criteria->compare('es_activo',$this->es_activo);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('usuario_creacion',$this->usuario_creacion);
		$criteria->compare('fecha_actualizacion',$this->fecha_actualizacion,true);
		$criteria->compare('usuario_actualizacion',$this->usuario_actualizacion);
		$criteria->compare('fk_sede',$this->fk_sede);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Actividad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
