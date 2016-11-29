<?php

/**
 * This is the model class for table "solicitud".
 *
 * The followings are the available columns in table 'solicitud':
 * @property integer $id_solicitud
 * @property integer $fk_paciente
 * @property integer $fk_sede
 * @property integer $fk_especialidad
 * @property string $fecha_solicitud
 * @property string $hora
 * @property string $motivo_consulta
 * @property string $medico_referido
 * @property string $fecha_creacion
 * @property integer $usuario_creacion
 * @property boolean $es_activo
 * @property integer $fk_medico
 *
 * The followings are the available model relations:
 * @property Paciente $fkPaciente
 * @property Sede $fkSede
 * @property Medicos $fkMedico
 * @property Especialidad $fkEspecialidad
 */
class Solicitud extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'solicitud';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_paciente, fk_sede, fk_especialidad, fecha_solicitud, fk_medico', 'required'),
			array('fk_paciente, fk_sede, fk_especialidad, usuario_creacion, fk_medico', 'numerical', 'integerOnly'=>true),
			array('motivo_consulta', 'length', 'max'=>300),
			array('medico_referido', 'length', 'max'=>200),
			array('hora, fecha_creacion, es_activo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_solicitud, fk_paciente, fk_sede, fk_especialidad, fecha_solicitud, hora, motivo_consulta, medico_referido, fecha_creacion, usuario_creacion, es_activo, fk_medico', 'safe', 'on'=>'search'),
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
			'fkPaciente' => array(self::BELONGS_TO, 'Paciente', 'fk_paciente'),
			'fkSede' => array(self::BELONGS_TO, 'Sede', 'fk_sede'),
			'fkMedico' => array(self::BELONGS_TO, 'Medicos', 'fk_medico'),
			'fkEspecialidad' => array(self::BELONGS_TO, 'Especialidad', 'fk_especialidad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_solicitud' => 'N°',
			'fk_paciente' => 'Paciente',
			'fk_sede' => 'Sede',
			'fk_especialidad' => 'Especialidad',
			'fecha_solicitud' => 'Cita',
			'hora' => 'Hora',
			'motivo_consulta' => 'Motivo Consulta',
			'medico_referido' => 'Medico Referido',
			'fecha_creacion' => 'Fecha de Solicitud',
			'usuario_creacion' => 'Usuario Solicitante',
			'es_activo' => 'Activo',
			'fk_medico' => 'Medico',
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
		$criteria->order = 'id_solicitud DESC';

		$criteria->compare('id_solicitud',$this->id_solicitud);
		$criteria->compare('fk_paciente',$this->fk_paciente);
		$criteria->compare('fk_sede',$this->fk_sede);
		$criteria->compare('fk_especialidad',$this->fk_especialidad);
		$criteria->compare('fecha_solicitud',$this->fecha_solicitud,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('motivo_consulta',$this->motivo_consulta,true);
		$criteria->compare('medico_referido',$this->medico_referido,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('usuario_creacion',$this->usuario_creacion);
		$criteria->compare('es_activo',$this->es_activo);
		$criteria->compare('fk_medico',$this->fk_medico);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Solicitud the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
