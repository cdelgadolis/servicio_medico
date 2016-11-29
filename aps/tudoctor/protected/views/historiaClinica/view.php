<?php
$this->breadcrumbs=array(
	'Historia Clinicas'=>array('admin'),
	$model->id_historia_clinica,
);

$this->menu=array(
array('label'=>'List HistoriaClinica','url'=>array('index')),
array('label'=>'Create HistoriaClinica','url'=>array('create')),
array('label'=>'Update HistoriaClinica','url'=>array('update','id'=>$model->id_historia_clinica)),
array('label'=>'Delete HistoriaClinica','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_historia_clinica),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage HistoriaClinica','url'=>array('admin')),
);
?>

<h1 class="titulo">Detalle Historia Clinica General 
<br>Paciente: <?php echo $model->paciente0->nombre." ". $model->paciente0->apellido; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'type' => 'striped bordered condensed',
'attributes'=>array(
		'id_historia_clinica',
		'paciente'=> array(
			'label' => 'Paciente',
			'name' => 'paciente',
			'value' => $model->paciente0->nombre." ". $model->paciente0->apellido,
			),
		'motivo_consulta',
		'enfermedad_actual',
		'antecedentes_personales',
		'alergico',
		'medicacion',
		'enfermedades',
		/*datos ginecologicos*/
		'FRS',
		'FUR',
		'PRS',
		'CICLO',
		'sinusorragia',
		'orgasmos',
		'maridos',
		'infeccion_ur',
		'dispareunia',
		'libido',
		'AVM',
		'DIU',
		'EIP',
		'ACO',
		'lactancia',
		'puerperio',
		'gestas',
		'observacion',
		/*datos psicobiologicos*/
		'fumar',
		'alcohol',
		'cafe',
		'drogas',
		'm_mejillas',
		'm_labios',
		'm_unas',
		'otros_habitosp',
		/*antecedentes familiares*/
		'padre',
		'madre',
		'hermanos',
		'otros',
		'otros_hp',
		/*signos vitales*/
		'peso',
		'talla',
		'frecuencia_cardiaca',
		'frecuencia_respiratoria',
		'tension_alta',
		'pulso',
		'circunferencia_cefalica',
		'circunferencia_abdominal',
		'comentarios',
		/*examen fisico*/
		'examen_fisico',
		/*examen paraclinicos*/
		'laboratorio',
		'imageneologia',
		'examenes_otros',
		/*impresion diagnostica*/
		'impresion_diagnostica',
		/*impresion diagnostica*/
		'plan_tratamiento',
		/*evolucion*/
		'evolucion',
		'estatus' => array(
			'label' => 'Estatus de la Historia',
			'value' => $model->estatus == 1 ? 'Activo':'Inactivo',
			),
		array(
			'label'=>'Fecha Creación',
			'name'=>'fecha_creacion',
			'value' => Yii::app()->dateFormatter->format("dd/MM/yyyy", strtotime($model->fecha_creacion)),
		),
		array(
			'label'=>'Usuario Creación',
			'name'=>'fk_usuario_creacion',
			'value' => $model->fkUsuarioCreacion->id_usuario." - ". $model->fkUsuarioCreacion->nombre,
			),
		array(
			'label'=>'Fecha Actualización',
			'type'=>'raw',
			'name'=>'fecha_actualizacion',
			'value' =>$model->fecha_actualizacion == NULL  ? '<i>No asignado</i>' : Yii::app()->dateFormatter->format("dd/MM/yyyy", strtotime($model->fecha_actualizacion)),
		),
		array(
			'label'=>'Usuario Actualización',
			'type'=>'raw',
			'name'=>'fk_usuario_actualizacion',
			'value' =>$model->fkUsuarioActualizacion == NULL  ? '<i>No asignado</i>' : $model->fkUsuarioActualizacion->id_usuario." - ". $model->fkUsuarioActualizacion->nombre,
			),
		/*	
		'tratamiento',
		*/

		
),
)); ?>
