<?php

/**
 * This is the model class for table "tipo_trabajador".
 *
 * The followings are the available columns in table 'tipo_trabajador':
 * @property integer $id_tipo_trabajador
 * @property string $tipo_trabajador
 * @property string $fecha_creacion
 * @property integer $usuario_actualizacion
 * @property integer $usuario_creacion
 * @property boolean $status
 * @property string $fecha_actualizacion
 *
 * The followings are the available model relations:
 * @property Usuario $usuarioActualizacion
 * @property Usuario $usuarioCreacion
 * @property Paciente[] $pacientes
 */
class TipoTrabajador extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipo_trabajador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_trabajador', 'required'),
			array('usuario_actualizacion, usuario_creacion', 'numerical', 'integerOnly'=>true),
			array('tipo_trabajador', 'length', 'max'=>100),
			array('fecha_creacion, status, fecha_actualizacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tipo_trabajador, tipo_trabajador, fecha_creacion, usuario_actualizacion, usuario_creacion, status, fecha_actualizacion', 'safe', 'on'=>'search'),
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
			'pacientes' => array(self::HAS_MANY, 'Paciente', 'tipo_trabajador'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tipo_trabajador' => 'N°',
			'tipo_trabajador' => 'Tipo Trabajador',
			'fecha_creacion' => 'Fecha Creación',
			'usuario_actualizacion' => 'Usuario Actualización',
			'usuario_creacion' => 'Usuario Creación',
			'status' => 'Estatus',
			'fecha_actualizacion' => 'Fecha Actualización',
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
		$criteria->order = 'id_tipo_trabajador DESC';

		$criteria->compare('id_tipo_trabajador',$this->id_tipo_trabajador);
		$criteria->compare('tipo_trabajador',$this->tipo_trabajador,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('usuario_actualizacion',$this->usuario_actualizacion);
		$criteria->compare('usuario_creacion',$this->usuario_creacion);
		$criteria->compare('status',$this->status);
		$criteria->compare('fecha_actualizacion',$this->fecha_actualizacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoTrabajador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}