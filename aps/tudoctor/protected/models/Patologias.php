<?php

/**
 * This is the model class for table "patologias".
 *
 * The followings are the available columns in table 'patologias':
 * @property integer $id_tipo_patologia
 * @property string $patologia
 * @property string $fecha_creacion
 * @property integer $usuario_creacion
 * @property string $fecha_actualizacion
 * @property integer $usuario_actualizacion
 * @property boolean $status
 *
 * The followings are the available model relations:
 * @property Usuario $usuarioActualizacion
 * @property Usuario $usuarioCreacion
 */
class Patologias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'patologias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('patologia', 'required'),
			array('usuario_creacion, usuario_actualizacion', 'numerical', 'integerOnly'=>true),
			array('patologia', 'length', 'max'=>100),
			array('fecha_creacion, fecha_actualizacion, status', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tipo_patologia, patologia, fecha_creacion, usuario_creacion, fecha_actualizacion, usuario_actualizacion, status', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tipo_patologia' => 'N°',
			'patologia' => 'Patología',
			'fecha_creacion' => 'Fecha Creación',
			'usuario_creacion' => 'Usuario Creación',
			'fecha_actualizacion' => 'Fecha Actualización',
			'usuario_actualizacion' => 'Usuario Actualización',
			'status' => 'Status',
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
		$criteria->order = 'id_tipo_patologia DESC';

		$criteria->compare('id_tipo_patologia',$this->id_tipo_patologia);
		$criteria->compare('patologia',$this->patologia,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('usuario_creacion',$this->usuario_creacion);
		$criteria->compare('fecha_actualizacion',$this->fecha_actualizacion,true);
		$criteria->compare('usuario_actualizacion',$this->usuario_actualizacion);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Patologias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
