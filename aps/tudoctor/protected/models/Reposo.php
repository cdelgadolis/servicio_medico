<?php

/**
 * This is the model class for table "reposo".
 *
 * The followings are the available columns in table 'reposo':
 * @property integer $id_reposo
 * @property integer $paciente
 * @property integer $tiempo_reposo
 * @property string $medida_reposo
 * @property string $observacion
 * @property boolean $estatus
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 * @property integer $fk_usuario_creacion
 * @property integer $fk_usuario_actualizacion
 *
 * The followings are the available model relations:
 * @property Paciente $paciente0
 */
class Reposo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reposo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('paciente, tiempo_reposo', 'required'),
			array('paciente, tiempo_reposo, fk_usuario_creacion, fk_usuario_actualizacion', 'numerical', 'integerOnly'=>true),
			array('medida_reposo, observacion', 'length', 'max'=>200),
			array('estatus, fecha_creacion, fecha_actualizacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_reposo, paciente, tiempo_reposo, medida_reposo, observacion, estatus, fecha_creacion, fecha_actualizacion, fk_usuario_creacion, fk_usuario_actualizacion', 'safe', 'on'=>'search'),
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
			'paciente0' => array(self::BELONGS_TO, 'Paciente', 'paciente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_reposo' => 'Id Reposo',
			'paciente' => 'Paciente',
			'tiempo_reposo' => 'Tiempo Reposo',
			'medida_reposo' => 'Medida Reposo',
			'observacion' => 'Observacion',
			'estatus' => 'Estatus',
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

		$criteria->compare('id_reposo',$this->id_reposo);
		$criteria->compare('paciente',$this->paciente);
		$criteria->compare('tiempo_reposo',$this->tiempo_reposo);
		$criteria->compare('medida_reposo',$this->medida_reposo,true);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('estatus',$this->estatus);
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
	 * @return Reposo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
