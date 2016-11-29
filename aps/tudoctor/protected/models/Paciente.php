<?php

/**
 * This is the model class for table "paciente".
 *
 * The followings are the available columns in table 'paciente':
 * @property integer $id_paciente
 * @property string $cedula
 * @property string $numero_historia
 * @property string $nombre
 * @property string $apellido
 * @property string $fecha_nacimiento
 * @property string $sexo
 * @property integer $estado_civil
 * @property integer $tipo_persona
 * @property integer $tipo_trabajador
 * @property integer $institucion
 * @property string $departamento
 * @property string $ocupacion
 * @property string $cedula_representante
 * @property string $nombre_representante
 * @property integer $parentesco
 * @property integer $fk_estado
 * @property string $direccion
 * @property string $lugar_nacimiento
 * @property string $telefono_celular
 * @property string $telefono_oficina
 * @property string $telefono_fijo
 * @property string $correo
 * @property string $foto
 * @property boolean $estatus
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 * @property integer $fk_usuario_creacion
 * @property integer $fk_usuario_actualizacion
 * @property string $nacionalidad
 * @property string $correo_sec
 *
 * The followings are the available model relations:
 * @property Evolucion[] $evolucions
 * @property Institucion $institucion0
 * @property Estado $fkEstado
 * @property TipoPersona $tipoPersona
 * @property TipoTrabajador $tipoTrabajador
 * @property Parentesco $parentesco0
 * @property Usuario $fkUsuarioCreacion
 * @property Usuario $fkUsuarioActualizacion
 * @property EstadoCivil $estadoCivil
 * @property Reposo[] $reposos
 * @property HistoriaClinica[] $historiaClinicas
 */
class Paciente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'paciente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula, nombre, apellido, sexo, estado_civil, tipo_persona, direccion, lugar_nacimiento, telefono_celular, correo, nacionalidad', 'required'),
			array('estado_civil, tipo_persona, tipo_trabajador, institucion, parentesco, fk_estado, fk_usuario_creacion, fk_usuario_actualizacion', 'numerical', 'integerOnly'=>true),
			array('cedula, numero_historia, cedula_representante, telefono_celular, telefono_oficina, telefono_fijo', 'length', 'max'=>15),
			array('nombre, apellido, nombre_representante', 'length', 'max'=>70),
			array('sexo, nacionalidad', 'length', 'max'=>1),
			array('departamento, ocupacion', 'length', 'max'=>90),
			array('direccion, lugar_nacimiento, foto', 'length', 'max'=>200),
			array('correo, correo_sec', 'length', 'max'=>50),
			array('fecha_nacimiento, estatus, fecha_creacion, fecha_actualizacion', 'safe'),
			
array('foto', 'length', 'max' => 255, 'tooLong' => '{attribute} el nombre del archivo es muy largo (max {max} caracteres).', 'on' => 'insert,upload'),
array('foto', 'file', 'types' => 'jpg,jpeg,gif,png', 'maxSize' => 1024 * 1024 * 2, 'tooLarge' => 'La foto debe ser menor a 2MB !!!', 'on' => 'insert, upload'),
 			
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_paciente, cedula, numero_historia, nombre, apellido, fecha_nacimiento, sexo, estado_civil, tipo_persona, tipo_trabajador, institucion, departamento, ocupacion, cedula_representante, nombre_representante, parentesco, fk_estado, direccion, lugar_nacimiento, telefono_celular, telefono_oficina, telefono_fijo, correo, foto, estatus, fecha_creacion, fecha_actualizacion, fk_usuario_creacion, fk_usuario_actualizacion, nacionalidad, correo_sec', 'safe', 'on'=>'search'),
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
			'evolucions' => array(self::HAS_MANY, 'Evolucion', 'paciente'),
			'institucion0' => array(self::BELONGS_TO, 'Institucion', 'institucion'),
			'fkEstado' => array(self::BELONGS_TO, 'Estado', 'fk_estado'),
			'tipoPersona' => array(self::BELONGS_TO, 'TipoPersona', 'tipo_persona'),
			'tipoTrabajador' => array(self::BELONGS_TO, 'TipoTrabajador', 'tipo_trabajador'),
			'parentesco0' => array(self::BELONGS_TO, 'Parentesco', 'parentesco'),
			'fkUsuarioCreacion' => array(self::BELONGS_TO, 'Usuario', 'fk_usuario_creacion'),
			'fkUsuarioActualizacion' => array(self::BELONGS_TO, 'Usuario', 'fk_usuario_actualizacion'),
			'estadoCivil' => array(self::BELONGS_TO, 'EstadoCivil', 'estado_civil'),
			'reposos' => array(self::HAS_MANY, 'Reposo', 'paciente'),
			'historiaClinicas' => array(self::HAS_MANY, 'HistoriaClinica', 'paciente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_paciente' => 'N°',
			'cedula' => 'Cédula',
			'numero_historia' => 'Número Historia',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'sexo' => 'Sexo',
			'estado_civil' => 'Estado Civil',
			'tipo_persona' => 'Tipo Persona',
			'tipo_trabajador' => 'Tipo Trabajador',
			'institucion' => 'Institución',
			'departamento' => 'Ubicación Administrativa / Departamento',
			'ocupacion' => 'Cargo / Ocupacion',
			'cedula_representante' => 'Cédula del Titular',
			'nombre_representante' => 'Nombre del Titular',
			'parentesco' => 'Parentesco',
			'fk_estado' => 'Estado',
			'direccion' => 'Dirección de Habitación',
			'lugar_nacimiento' => 'Lugar de Nacimiento',
			'telefono_celular' => 'Telefono Celular',
			'telefono_oficina' => 'Telefono Oficina',
			'telefono_fijo' => 'Telefono Fijo',
			'correo' => 'Correo Principal',
			'foto' => 'Foto',
			'estatus' => 'Estatus',
			'fecha_creacion' => 'Fecha Creación',
			'fecha_actualizacion' => 'Fecha Actualización',
			'fk_usuario_creacion' => 'Usuario Registro',
			'fk_usuario_actualizacion' => 'Usuario Actualización',
			'nacionalidad' => 'Nacionalidad',
			'correo_sec' => 'Correo Secundario',
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
		$criteria->order = 'id_paciente DESC';

		$criteria->compare('id_paciente',$this->id_paciente);
		$criteria->compare('cedula',$this->cedula,true);
		$criteria->compare('numero_historia',$this->numero_historia,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('estado_civil',$this->estado_civil);
		$criteria->compare('tipo_persona',$this->tipo_persona);
		$criteria->compare('tipo_trabajador',$this->tipo_trabajador);
		$criteria->compare('institucion',$this->institucion);
		$criteria->compare('departamento',$this->departamento,true);
		$criteria->compare('ocupacion',$this->ocupacion,true);
		$criteria->compare('cedula_representante',$this->cedula_representante,true);
		$criteria->compare('nombre_representante',$this->nombre_representante,true);
		$criteria->compare('parentesco',$this->parentesco);
		$criteria->compare('fk_estado',$this->fk_estado);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('lugar_nacimiento',$this->lugar_nacimiento,true);
		$criteria->compare('telefono_celular',$this->telefono_celular,true);
		$criteria->compare('telefono_oficina',$this->telefono_oficina,true);
		$criteria->compare('telefono_fijo',$this->telefono_fijo,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('estatus',$this->estatus);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_actualizacion',$this->fecha_actualizacion,true);
		$criteria->compare('fk_usuario_creacion',$this->fk_usuario_creacion);
		$criteria->compare('fk_usuario_actualizacion',$this->fk_usuario_actualizacion);
		$criteria->compare('nacionalidad',$this->nacionalidad,true);
		$criteria->compare('correo_sec',$this->correo_sec,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	
	public function calcularEdad( $fechanaciomiento ){
	
		if( !empty( $fechanaciomiento ) ){
			
			$birthdate = new DateTime( date( "Y-m-d", strtotime( $fechanaciomiento ) ) );
			$today   = new DateTime('today');
			$edad = $birthdate->diff($today)->y;
			return $edad;
		}else{
			return 0;
		}		
		//return $edad;
	}	

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Paciente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
