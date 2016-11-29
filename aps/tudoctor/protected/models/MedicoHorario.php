<?php

/**
 * This is the model class for table "medico_horario".
 *
 * The followings are the available columns in table 'medico_horario':
 * @property integer $id_medico_horario
 * @property integer $medico
 * @property integer $dia
 * @property string $hora_entrada
 * @property string $hora_salida
 * @property boolean $es_activo
 * @property string $fecha_creacion
 * @property integer $usuario_creacion
 * @property string $fecha_actualizacion
 * @property integer $usuario_actualizacion
 *
 * The followings are the available model relations:
 * @property Medicos $medico0
 * @property Dias $dia0
 * @property Usuario $usuarioActualizacion
 * @property Usuario $usuarioCreacion
 */
class MedicoHorario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'medico_horario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('medico, dia, hora_entrada, hora_salida', 'required'),
			array('medico, dia, usuario_creacion, usuario_actualizacion', 'numerical', 'integerOnly'=>true),
			array('es_activo, fecha_creacion, fecha_actualizacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_medico_horario, medico, dia, hora_entrada, hora_salida, es_activo, fecha_creacion, usuario_creacion, fecha_actualizacion, usuario_actualizacion', 'safe', 'on'=>'search'),
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
			'medico0' => array(self::BELONGS_TO, 'Medicos', 'medico'),
			'dia0' => array(self::BELONGS_TO, 'Dias', 'dia'),
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
			'id_medico_horario' => 'N°',
			'medico' => 'Médico',
			'dia' => 'Día',
			'hora_entrada' => 'Hora Entrada',
			'hora_salida' => 'Hora Salida',
			'es_activo' => 'Estatus',
			'fecha_creacion' => 'Fecha Creación',
			'usuario_creacion' => 'Usuario Creación',
			'fecha_actualizacion' => 'Fecha Actualización',
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
		$criteria->order = 'id_medico_horario DESC';

		$criteria->compare('id_medico_horario',$this->id_medico_horario);
		$criteria->compare('medico',$this->medico);
		$criteria->compare('dia',$this->dia);
		$criteria->compare('hora_entrada',$this->hora_entrada,true);
		$criteria->compare('hora_salida',$this->hora_salida,true);
		$criteria->compare('es_activo',$this->es_activo);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('usuario_creacion',$this->usuario_creacion);
		$criteria->compare('fecha_actualizacion',$this->fecha_actualizacion,true);
		$criteria->compare('usuario_actualizacion',$this->usuario_actualizacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MedicoHorario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
