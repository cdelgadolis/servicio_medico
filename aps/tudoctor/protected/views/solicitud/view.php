<?php
$this->breadcrumbs=array(
	'Solicituds'=>array('index'),
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

<h1>View Solicitud #<?php echo $model->id_solicitud; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_solicitud',
		'fk_paciente',
		'fk_sede',
		'fk_especialidad',
		'fecha_solicitud',
		'hora',
		'motivo_consulta',
		'medico_referido',
		'fecha_creacion',
		'usuario_creacion',
		'es_activo',
		'fk_medico',
),
)); ?>
