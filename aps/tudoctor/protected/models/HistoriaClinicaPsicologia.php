<?php

/**
 * This is the model class for table "historia_clinica_psicologia".
 *
 * The followings are the available columns in table 'historia_clinica_psicologia':
 * @property integer $id_hc_psicologia
 * @property integer $paciente
 * @property string $fecha_ingreso
 * @property string $hora
 * @property string $nombre_padre
 * @property string $nombre_madre
 * @property string $nombre_conyugue
 * @property string $referido
 * @property string $motivo_consulta
 * @property string $enfermedad_actual
 * @property string $antecedentes_familiares
 * @property string $padre
 * @property string $madre
 * @property string $hermanos
 * @property string $otros
 * @property string $antecedentes_personales
 * @property string $tabaco
 * @property string $alcohol
 * @property string $drogas
 * @property string $otros_hp
 * @property string $examen_fisico
 * @property string $tension_alta
 * @property string $frecuencia_cardiaca
 * @property string $frecuencia_respiratoria
 * @property string $talla
 * @property string $peso
 * @property string $pulso
 * @property string $examen_mental
 * @property string $impresion_diagnostica
 * @property string $plan_tratamiento
 * @property string $observacion
 * @property string $comentarios
 * @property boolean $estatus
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 * @property integer $fk_usuario_creacion
 * @property integer $fk_usuario_actualizacion
 *
 * The followings are the available model relations:
 * @property Paciente $paciente0
 * @property Usuario $fkUsuarioCreacion
 * @property Usuario $fkUsuarioActualizacion
 */
class HistoriaClinicaPsicologia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'historia_clinica_psicologia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('paciente, hora, referido, motivo_consulta, enfermedad_actual, antecedentes_familiares, antecedentes_personales, examen_fisico, impresion_diagnostica, plan_tratamiento, observacion, comentarios', 'required'),
			array('paciente, fk_usuario_creacion, fk_usuario_actualizacion', 'numerical', 'integerOnly'=>true),
			array('nombre_padre, nombre_madre, nombre_conyugue', 'length', 'max'=>30),
			array('tabaco, alcohol, drogas', 'length', 'max'=>50),
			array('tension_alta, frecuencia_cardiaca, frecuencia_respiratoria, pulso', 'length', 'max'=>10),
			array('talla, peso', 'length', 'max'=>3),
			array('fecha_ingreso, padre, madre, hermanos, otros, otros_hp, examen_mental, estatus, fecha_creacion, fecha_actualizacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_hc_psicologia, paciente, fecha_ingreso, hora, nombre_padre, nombre_madre, nombre_conyugue, referido, motivo_consulta, enfermedad_actual, antecedentes_familiares, padre, madre, hermanos, otros, antecedentes_personales, tabaco, alcohol, drogas, otros_hp, examen_fisico, tension_alta, frecuencia_cardiaca, frecuencia_respiratoria, talla, peso, pulso, examen_mental, impresion_diagnostica, plan_tratamiento, observacion, comentarios, estatus, fecha_creacion, fecha_actualizacion, fk_usuario_creacion, fk_usuario_actualizacion', 'safe', 'on'=>'search'),
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
			'fkUsuarioCreacion' => array(self::BELONGS_TO, 'Usuario', 'fk_usuario_creacion'),
			'fkUsuarioActualizacion' => array(self::BELONGS_TO, 'Usuario', 'fk_usuario_actualizacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_hc_psicologia' => 'N°',
			'paciente' => 'Paciente',
			'fecha_ingreso' => 'Fecha Ingreso',
			'hora' => 'Hora',
			'nombre_padre' => 'Nombre y Apellido del Padre',
			'nombre_madre' => 'Nombre y Apellido de la Madre',
			'nombre_conyugue' => 'Nombre y Apellido del Conyugue',
			'referido' => 'Referido',
			'motivo_consulta' => 'Motivo Consulta',
			'enfermedad_actual' => 'Enfermedad Actual',
			'antecedentes_familiares' => 'Antecedentes Familiares',
			'padre' => 'Padre',
			'madre' => 'Madre',
			'hermanos' => 'Hermanos',
			'otros' => 'Otros Antecedentes Familiares',
			'antecedentes_personales' => 'Antecedentes Personales',
			'tabaco' => 'Tabaco',
			'alcohol' => 'Alcohol',
			'drogas' => 'Drogas',
			'otros_hp' => 'Otros Hábitos Psicobiologicos',
			'examen_fisico' => 'Examen Fisico',
			'tension_alta' => 'Tension Alta',
			'frecuencia_cardiaca' => 'Frecuencia Cardiaca',
			'frecuencia_respiratoria' => 'Frecuencia Respiratoria',
			'talla' => 'Talla',
			'peso' => 'Peso',
			'pulso' => 'Pulso',
			'examen_mental' => 'Examen Mental',
			'impresion_diagnostica' => 'Impresión Diagnostica',
			'plan_tratamiento' => 'Plan o Tratamiento',
			'observacion' => 'Observación',
			'comentarios' => 'Comentarios',
			'estatus' => 'Estatus',
			'fecha_creacion' => 'Fecha de Creación',
			'fecha_actualizacion' => 'Fecha de Actualización',
			'fk_usuario_creacion' => 'Usuario de Creación',
			'fk_usuario_actualizacion' => 'Usuario de Actualización',
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
		$criteria->order = 'id_hc_psicologia DESC';

		$criteria->compare('id_hc_psicologia',$this->id_hc_psicologia);
		$criteria->compare('paciente',$this->paciente);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('nombre_padre',$this->nombre_padre,true);
		$criteria->compare('nombre_madre',$this->nombre_madre,true);
		$criteria->compare('nombre_conyugue',$this->nombre_conyugue,true);
		$criteria->compare('referido',$this->referido,true);
		$criteria->compare('motivo_consulta',$this->motivo_consulta,true);
		$criteria->compare('enfermedad_actual',$this->enfermedad_actual,true);
		$criteria->compare('antecedentes_familiares',$this->antecedentes_familiares,true);
		$criteria->compare('padre',$this->padre,true);
		$criteria->compare('madre',$this->madre,true);
		$criteria->compare('hermanos',$this->hermanos,true);
		$criteria->compare('otros',$this->otros,true);
		$criteria->compare('antecedentes_personales',$this->antecedentes_personales,true);
		$criteria->compare('tabaco',$this->tabaco,true);
		$criteria->compare('alcohol',$this->alcohol,true);
		$criteria->compare('drogas',$this->drogas,true);
		$criteria->compare('otros_hp',$this->otros_hp,true);
		$criteria->compare('examen_fisico',$this->examen_fisico,true);
		$criteria->compare('tension_alta',$this->tension_alta,true);
		$criteria->compare('frecuencia_cardiaca',$this->frecuencia_cardiaca,true);
		$criteria->compare('frecuencia_respiratoria',$this->frecuencia_respiratoria,true);
		$criteria->compare('talla',$this->talla,true);
		$criteria->compare('peso',$this->peso,true);
		$criteria->compare('pulso',$this->pulso,true);
		$criteria->compare('examen_mental',$this->examen_mental,true);
		$criteria->compare('impresion_diagnostica',$this->impresion_diagnostica,true);
		$criteria->compare('plan_tratamiento',$this->plan_tratamiento,true);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('comentarios',$this->comentarios,true);
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
	 * @return HistoriaClinicaPsicologia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
