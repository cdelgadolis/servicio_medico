<?php

/**
 * This is the model class for table "evolucion".
 *
 * The followings are the available columns in table 'evolucion':
 * @property integer $id_evaluacion
 * @property integer $paciente
 * @property string $motivo_consulta
 * @property string $tension_alta
 * @property string $frecuencia_cardiaca
 * @property string $frecuencia_respiratoria
 * @property string $peso
 * @property string $talla
 * @property string $pulso
 * @property string $circunferencia_cefalica
 * @property string $circunferencia_abdominal
 * @property string $otros_sv
 * @property string $examen_fisico
 * @property string $laboratorio
 * @property string $imageneologia
 * @property string $otros_examenes
 * @property string $impresion_diagnostica
 * @property string $plan_tratamiento
 * @property boolean $reposo
 * @property string $observacion
 * @property string $fecha_creacion
 * @property integer $usuario_creacion
 * @property string $fecha_actualizacion
 * @property integer $usuario_actualizacion
 * @property boolean $status
 *
 * The followings are the available model relations:
 * @property Usuario $usuarioActualizacion
 * @property Usuario $usuarioCreacion
 * @property Paciente $paciente0
 */
class Evolucion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'evolucion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('paciente, examen_fisico, impresion_diagnostica, plan_tratamiento, peso, talla, pulso, tension_alta, frecuencia_cardiaca, frecuencia_respiratoria,', 'required'),
			array('paciente, usuario_creacion, usuario_actualizacion', 'numerical', 'integerOnly'=>true),
			array('motivo_consulta', 'length', 'max'=>30),
			array('tension_alta, frecuencia_cardiaca, frecuencia_respiratoria, circunferencia_cefalica, circunferencia_abdominal', 'length', 'max'=>20),
			array('peso, talla, pulso', 'length', 'max'=>10),
			array('otros_sv', 'length', 'max'=>100),
			array('laboratorio, imageneologia, otros_examenes, reposo, observacion, fecha_creacion, fecha_actualizacion, status', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_evaluacion, paciente, motivo_consulta, tension_alta, frecuencia_cardiaca, frecuencia_respiratoria, peso, talla, pulso, circunferencia_cefalica, circunferencia_abdominal, otros_sv, examen_fisico, laboratorio, imageneologia, otros_examenes, impresion_diagnostica, plan_tratamiento, reposo, observacion, fecha_creacion, usuario_creacion, fecha_actualizacion, usuario_actualizacion, status', 'safe', 'on'=>'search'),
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
			'paciente0' => array(self::BELONGS_TO, 'Paciente', 'paciente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_evaluacion' => 'N°',
			'paciente' => 'Paciente',
			'motivo_consulta' => 'Motivo Consulta',
			'tension_alta' => 'Tensión Alta',
			'frecuencia_cardiaca' => 'Frecuencia Cardíaca',
			'frecuencia_respiratoria' => 'Frecuencia Respiratoria',
			'peso' => 'Peso',
			'talla' => 'Talla',
			'pulso' => 'Pulso',
			'circunferencia_cefalica' => 'Circunferencia Cefálica',
			'circunferencia_abdominal' => 'Circunferencia Abdominal',
			'otros_sv' => 'Otros Signos Vitales',
			'examen_fisico' => 'Examen Físico',
			'laboratorio' => 'Laboratorio',
			'imageneologia' => 'Imageneologia',
			'otros_examenes' => 'Otros Examenes',
			'impresion_diagnostica' => 'Impresión Diagnóstica',
			'plan_tratamiento' => 'Plan o Tratamiento',
			'reposo' => 'Reposo',
			'observacion' => 'Observación',
			'fecha_creacion' => 'Fecha Creación',
			'usuario_creacion' => 'Usuario Creación',
			'fecha_actualizacion' => 'Fecha Actualización',
			'usuario_actualizacion' => 'Usuario Actualización',
			'status' => 'Estatus',
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
		$criteria->order = 'id_evaluacion DESC';

		$criteria->compare('id_evaluacion',$this->id_evaluacion);
		$criteria->compare('paciente',$this->paciente);
		$criteria->compare('motivo_consulta',$this->motivo_consulta,true);
		$criteria->compare('tension_alta',$this->tension_alta,true);
		$criteria->compare('frecuencia_cardiaca',$this->frecuencia_cardiaca,true);
		$criteria->compare('frecuencia_respiratoria',$this->frecuencia_respiratoria,true);
		$criteria->compare('peso',$this->peso,true);
		$criteria->compare('talla',$this->talla,true);
		$criteria->compare('pulso',$this->pulso,true);
		$criteria->compare('circunferencia_cefalica',$this->circunferencia_cefalica,true);
		$criteria->compare('circunferencia_abdominal',$this->circunferencia_abdominal,true);
		$criteria->compare('otros_sv',$this->otros_sv,true);
		$criteria->compare('examen_fisico',$this->examen_fisico,true);
		$criteria->compare('laboratorio',$this->laboratorio,true);
		$criteria->compare('imageneologia',$this->imageneologia,true);
		$criteria->compare('otros_examenes',$this->otros_examenes,true);
		$criteria->compare('impresion_diagnostica',$this->impresion_diagnostica,true);
		$criteria->compare('plan_tratamiento',$this->plan_tratamiento,true);
		$criteria->compare('reposo',$this->reposo);
		$criteria->compare('observacion',$this->observacion,true);
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
	 * @return Evolucion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
