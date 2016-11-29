<?php

/**
 * This is the model class for table "historia_clinica".
 *
 * The followings are the available columns in table 'historia_clinica':
 * @property integer $id_historia_clinica
 * @property integer $paciente
 * @property string $peso
 * @property string $talla
 * @property string $frecuencia_cardiaca
 * @property string $frecuencia_respiratoria
 * @property string $tension_alta
 * @property string $pulso
 * @property string $circunferencia_cefalica
 * @property string $circunferencia_abdominal
 * @property string $otros
 * @property string $alergico
 * @property string $medicacion
 * @property string $enfermedades
 * @property string $observacion
 * @property string $comentarios
 * @property string $impresion_diagnostica
 * @property string $tratamiento
 * @property string $evolucion
 * @property string $laboratorio
 * @property string $examenes_otros
 * @property boolean $estatus
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 * @property integer $fk_usuario_creacion
 * @property integer $fk_usuario_actualizacion
 * @property string $imageneologia
 * @property string $plan_tratamiento
 * @property string $examen_fisico
 * @property string $motivo_consulta
 * @property string $enfermedad_actual
 * @property string $antecedentes_personales
 * @property string $padre
 * @property string $madre
 * @property string $hermanos
 * @property string $otros_hp
 * @property string $fumar
 * @property string $alcohol
 * @property string $cafe
 * @property string $drogas
 * @property string $m_mejillas
 * @property string $m_labios
 * @property string $m_unas
 * @property string $otros_habitosp
 * @property string $FRS
 * @property string $FUR
 * @property string $PRS
 * @property string $CICLO
 * @property string $sinusorragia
 * @property string $orgasmos
 * @property string $maridos
 * @property string $infeccion_ur
 * @property string $dispareunia
 * @property string $libido
 * @property string $AVM
 * @property string $DIU
 * @property string $EIP
 * @property string $ACO
 * @property string $lactancia
 * @property string $puerperio
 * @property string $gestas
 *
 * The followings are the available model relations:
 * @property Paciente $paciente0
 * @property Usuario $fkUsuarioCreacion
 * @property Usuario $fkUsuarioActualizacion
 */
class HistoriaClinica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'historia_clinica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('paciente, impresion_diagnostica, evolucion, motivo_consulta, enfermedad_actual, antecedentes_personales', 'required'),
			array('paciente, fk_usuario_creacion, fk_usuario_actualizacion', 'numerical', 'integerOnly'=>true),
			array('peso, talla', 'length', 'max'=>3),
			array('frecuencia_cardiaca, frecuencia_respiratoria, tension_alta, pulso, circunferencia_cefalica, circunferencia_abdominal', 'length', 'max'=>10),
			array('otros, FRS, FUR, PRS, CICLO, sinusorragia, orgasmos, maridos, infeccion_ur, dispareunia, libido, AVM, DIU, EIP, ACO, lactancia, puerperio', 'length', 'max'=>100),
			array('alergico, medicacion', 'length', 'max'=>200),
			array('fumar, alcohol, cafe, drogas, m_mejillas, m_labios, m_unas', 'length', 'max'=>50),
			array('enfermedades, observacion, comentarios, tratamiento, laboratorio, examenes_otros, estatus, fecha_creacion, fecha_actualizacion, imageneologia, plan_tratamiento, examen_fisico, padre, madre, hermanos, otros_hp, otros_habitosp, gestas', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_historia_clinica, paciente, peso, talla, frecuencia_cardiaca, frecuencia_respiratoria, tension_alta, pulso, circunferencia_cefalica, circunferencia_abdominal, otros, alergico, medicacion, enfermedades, observacion, comentarios, impresion_diagnostica, tratamiento, evolucion, laboratorio, examenes_otros, estatus, fecha_creacion, fecha_actualizacion, fk_usuario_creacion, fk_usuario_actualizacion, imageneologia, plan_tratamiento, examen_fisico, motivo_consulta, enfermedad_actual, antecedentes_personales, padre, madre, hermanos, otros_hp, fumar, alcohol, cafe, drogas, m_mejillas, m_labios, m_unas, otros_habitosp, FRS, FUR, PRS, CICLO, sinusorragia, orgasmos, maridos, infeccion_ur, dispareunia, libido, AVM, DIU, EIP, ACO, lactancia, puerperio, gestas', 'safe', 'on'=>'search'),
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
			'id_historia_clinica' => 'N°',
			'paciente' => 'Paciente',
			'peso' => 'Peso',
			'talla' => 'Talla',
			'frecuencia_cardiaca' => 'Frecuencia Cardiaca',
			'frecuencia_respiratoria' => 'Frecuencia Respiratoria',
			'tension_alta' => 'Tension Arterial',
			'pulso' => 'Pulso',
			'circunferencia_cefalica' => 'Circunferencia Cefalica',
			'circunferencia_abdominal' => 'Circunferencia Abdominal',
			'otros' => 'Otros',
			'alergico' => 'Alergico',
			'medicacion' => 'Medicacion',
			'enfermedades' => 'Enfermedades',
			'observacion' => 'Observación',
			'comentarios' => 'Comentarios',
			'impresion_diagnostica' => 'Impresión Diagnostica',
			'tratamiento' => 'Tratamiento',
			'evolucion' => 'Evolución',
			'laboratorio' => 'Laboratorio',
			'examenes_otros' => 'Otros Examenes',
			'estatus' => 'Estatus',
			'fecha_creacion' => 'Fecha Creación',
			'fecha_actualizacion' => 'Fecha Actualización',
			'fk_usuario_creacion' => 'Usuario Creación',
			'fk_usuario_actualizacion' => 'Usuario Actualización',
			'imageneologia' => 'Imageneologia',
			'plan_tratamiento' => 'Plan o Tratamiento',
			'examen_fisico' => 'Examen Físico',
			'motivo_consulta' => 'Motivo Consulta',
			'enfermedad_actual' => 'Enfermedad Actual',
			'antecedentes_personales' => 'Antecedentes Personales',
			'padre' => 'Padre',
			'madre' => 'Madre',
			'hermanos' => 'Hermanos',
			'otros_hp' => 'Hábitos Psicobiologicos',
			'fumar' => 'Fumar',
			'alcohol' => 'Alcohol',
			'cafe' => 'Café',
			'drogas' => 'Drogas',
			'm_mejillas' => 'Morderse las Mejillas',
			'm_labios' => 'Morderse los Labios',
			'm_unas' => 'Morderse las Uñas',
			'otros_habitosp' => 'Otros Habitos Psicobiologicos',
			'FRS' => 'FRS',
			'FUR' => 'FUR',
			'PRS' => 'PRS',
			'CICLO' => 'Ciclo',
			'sinusorragia' => 'Sinusorragia',
			'orgasmos' => 'Orgasmos',
			'maridos' => 'Parejas',
			'infeccion_ur' => 'Infección Urinaria',
			'dispareunia' => 'Dispareunia',
			'libido' => 'Libido',
			'AVM' => 'AVM',
			'DIU' => 'DIU',
			'EIP' => 'EIP',
			'ACO' => 'ACO',
			'lactancia' => 'Lactancia',
			'puerperio' => 'Puerperio',
			'gestas' => 'Gestas',
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

		$criteria->compare('id_historia_clinica',$this->id_historia_clinica);
		$criteria->compare('paciente',$this->paciente);
		$criteria->compare('peso',$this->peso,true);
		$criteria->compare('talla',$this->talla,true);
		$criteria->compare('frecuencia_cardiaca',$this->frecuencia_cardiaca,true);
		$criteria->compare('frecuencia_respiratoria',$this->frecuencia_respiratoria,true);
		$criteria->compare('tension_alta',$this->tension_alta,true);
		$criteria->compare('pulso',$this->pulso,true);
		$criteria->compare('circunferencia_cefalica',$this->circunferencia_cefalica,true);
		$criteria->compare('circunferencia_abdominal',$this->circunferencia_abdominal,true);
		$criteria->compare('otros',$this->otros,true);
		$criteria->compare('alergico',$this->alergico,true);
		$criteria->compare('medicacion',$this->medicacion,true);
		$criteria->compare('enfermedades',$this->enfermedades,true);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('comentarios',$this->comentarios,true);
		$criteria->compare('impresion_diagnostica',$this->impresion_diagnostica,true);
		$criteria->compare('tratamiento',$this->tratamiento,true);
		$criteria->compare('evolucion',$this->evolucion,true);
		$criteria->compare('laboratorio',$this->laboratorio,true);
		$criteria->compare('examenes_otros',$this->examenes_otros,true);
		$criteria->compare('estatus',$this->estatus);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_actualizacion',$this->fecha_actualizacion,true);
		$criteria->compare('fk_usuario_creacion',$this->fk_usuario_creacion);
		$criteria->compare('fk_usuario_actualizacion',$this->fk_usuario_actualizacion);
		$criteria->compare('imageneologia',$this->imageneologia,true);
		$criteria->compare('plan_tratamiento',$this->plan_tratamiento,true);
		$criteria->compare('examen_fisico',$this->examen_fisico,true);
		$criteria->compare('motivo_consulta',$this->motivo_consulta,true);
		$criteria->compare('enfermedad_actual',$this->enfermedad_actual,true);
		$criteria->compare('antecedentes_personales',$this->antecedentes_personales,true);
		$criteria->compare('padre',$this->padre,true);
		$criteria->compare('madre',$this->madre,true);
		$criteria->compare('hermanos',$this->hermanos,true);
		$criteria->compare('otros_hp',$this->otros_hp,true);
		$criteria->compare('fumar',$this->fumar,true);
		$criteria->compare('alcohol',$this->alcohol,true);
		$criteria->compare('cafe',$this->cafe,true);
		$criteria->compare('drogas',$this->drogas,true);
		$criteria->compare('m_mejillas',$this->m_mejillas,true);
		$criteria->compare('m_labios',$this->m_labios,true);
		$criteria->compare('m_unas',$this->m_unas,true);
		$criteria->compare('otros_habitosp',$this->otros_habitosp,true);
		$criteria->compare('FRS',$this->FRS,true);
		$criteria->compare('FUR',$this->FUR,true);
		$criteria->compare('PRS',$this->PRS,true);
		$criteria->compare('CICLO',$this->CICLO,true);
		$criteria->compare('sinusorragia',$this->sinusorragia,true);
		$criteria->compare('orgasmos',$this->orgasmos,true);
		$criteria->compare('maridos',$this->maridos,true);
		$criteria->compare('infeccion_ur',$this->infeccion_ur,true);
		$criteria->compare('dispareunia',$this->dispareunia,true);
		$criteria->compare('libido',$this->libido,true);
		$criteria->compare('AVM',$this->AVM,true);
		$criteria->compare('DIU',$this->DIU,true);
		$criteria->compare('EIP',$this->EIP,true);
		$criteria->compare('ACO',$this->ACO,true);
		$criteria->compare('lactancia',$this->lactancia,true);
		$criteria->compare('puerperio',$this->puerperio,true);
		$criteria->compare('gestas',$this->gestas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HistoriaClinica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
