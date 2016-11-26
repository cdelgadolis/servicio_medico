<?php
$this->breadcrumbs=array(
	'Evolucions'=>array('index'),
	$model->id_evaluacion,
);

$this->menu=array(
array('label'=>'List Evolucion','url'=>array('index')),
array('label'=>'Create Evolucion','url'=>array('create')),
array('label'=>'Update Evolucion','url'=>array('update','id'=>$model->id_evaluacion)),
array('label'=>'Delete Evolucion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_evaluacion),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Evolucion','url'=>array('admin')),
);
?>

<h1>View Evolucion #<?php echo $model->id_evaluacion; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_evaluacion',
		'paciente',
		'motivo_consulta',
		'tension_alta',
		'frecuencia_cardiaca',
		'frecuencia_respiratoria',
		'peso',
		'talla',
		'pulso',
		'circunferencia_cefalica',
		'circunferencia_abdominal',
		'otros_sv',
		'examen_fisico',
		'laboratorio',
		'imageneologia',
		'otros_examenes',
		'impresion_diagnostica',
		'plan_tratamiento',
		'reposo',
		'observacion',
		'fecha_creacion',
		'usuario_creacion',
		'fecha_actualizacion',
		'usuario_actualizacion',
		'status',
),
)); ?>
