<?php
$this->breadcrumbs=array(
	'Solicitud',
	$model->id_solicitud,
);

$this->menu=array(
array('label'=>'List Solicitud','url'=>array('index')),
array('label'=>'Create Solicitud','url'=>array('create')),
array('label'=>'Update Solicitud','url'=>array('update','id'=>$model->id_solicitud)),
array('label'=>'Delete Solicitud','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_solicitud),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Solicitud','url'=>array('admin')),
);
?>

<h1 class="titulo">Detalle de la Solicitud de Cita N°<?php echo $model->id_solicitud; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'type' => 'striped bordered condensed',
'attributes'=>array(
		'id_solicitud',
		array(
			'label'=>'Paciente',
			'name'=>'fk_paciente',
			'value' =>$model->fkPaciente->nombre." ". $model->fkPaciente->apellido,
			),
		array(
			'label'=>'Sede',
			'name'=>'fk_sede',
			'value' =>$model->fkSede->sede,
			),
		array(
			'label'=>'Especialidad',
			'name'=>'fk_especialidad',
			'value' =>$model->fkEspecialidad->descripcion,
			),
		array(
			'label'=>'Médico',
			'name'=>'fk_medico',
			'value' =>$model->fkMedico->nombres." ". $model->fkMedico->apellidos,
			),
		array(
			'label'=>'Cita',
			'name'=>'fecha_solicitud',
			'value' => Yii::app()->dateFormatter->format("dd/MM/yyyy", strtotime($model->fecha_solicitud)),
		),
		'hora',
		'motivo_consulta',
		'medico_referido',
		array(
			'label'=>'Fecha de Solicitud',
			'name'=>'fecha_creacion',
			'value' => Yii::app()->dateFormatter->format("dd/MM/yyyy", strtotime($model->fecha_creacion)),
		),
		/*'usuario_creacion',*/
		array(
			'label'=>'Estatus de la Cita',
			'name'=>'es_activo',
			'value' => $model->es_activo == TRUE ? 'ACTIVO':'INACTIVO',
			),
),
)); ?>
