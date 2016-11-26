<?php

/**
 * This is the model class for table "especialidad".
 *
 * The followings are the available columns in table 'especialidad':
 * @property integer $id_especialidad
 * @property string $descripcion
 * @property integer $sede
 * @property boolean $es_activo
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 * @property integer $usuario_creacion
 * @property integer $usuario_actualizacion
 *
 * The followings are the available model relations:
 * @property Sede $sede0
 * @property Usuario $usuarioCreacion
 * @property Usuario $usuarioActualizacion
 * @property Medicos[] $medicoses
 */
class Especialidad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'especialidad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sede, descripcion', 'required'),
			array('sede, usuario_creacion, usuario_actualizacion', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>100),
			array('es_activo, fecha_creacion, fecha_actualizacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_especialidad, descripcion, sede, es_activo, fecha_creacion, fecha_actualizacion, usuario_creacion, usuario_actualizacion', 'safe', 'on'=>'search'),
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
			'sede0' => array(self::BELONGS_TO, 'Sede', 'sede'),
			'usuarioCreacion' => array(self::BELONGS_TO, 'Usuario', 'usuario_creacion'),
			'usuarioActualizacion' => array(self::BELONGS_TO, 'Usuario', 'usuario_actualizacion'),
			'medicoses' => array(self::HAS_MANY, 'Medicos', 'especialidad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_especialidad' => 'N°',
			'descripcion' => 'Descripción',
			'sede' => 'Sede',
			'es_activo' => 'Estatus',
			'fecha_creacion' => 'Fecha Creación',
			'fecha_actualizacion' => 'Fecha Actualización',
			'usuario_creacion' => 'Usuario Creación',
			'usuario_actualizacion' => 'Usuario Actualización',
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
		$criteria->order = 'id_especialidad DESC';

		$criteria->compare('id_especialidad',$this->id_especialidad);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('sede',$this->sede);
		$criteria->compare('es_activo',$this->es_activo);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_actualizacion',$this->fecha_actualizacion,true);
		$criteria->compare('usuario_creacion',$this->usuario_creacion);
		$criteria->compare('usuario_actualizacion',$this->usuario_actualizacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Especialidad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
