<?php
$this->breadcrumbs=array(
	'Reposos'=>array('index'),
	$model->id_reposo,
);

$this->menu=array(
array('label'=>'List Reposo','url'=>array('index')),
array('label'=>'Create Reposo','url'=>array('create')),
array('label'=>'Update Reposo','url'=>array('update','id'=>$model->id_reposo)),
array('label'=>'Delete Reposo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_reposo),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Reposo','url'=>array('admin')),
);
?>

<h1>View Reposo #<?php echo $model->id_reposo; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_reposo',
		'paciente',
		'tiempo_reposo',
		'medida_reposo',
		'observacion',
		'estatus',
		'fecha_creacion',
		'fecha_actualizacion',
		'fk_usuario_creacion',
		'fk_usuario_actualizacion',
),
)); ?>
