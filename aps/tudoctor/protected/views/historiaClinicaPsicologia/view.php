<?php
$this->breadcrumbs=array(
	'Historia Clinica Psicologias'=>array('index'),
	$model->id_hc_psicologia,
);

$this->menu=array(
array('label'=>'List HistoriaClinicaPsicologia','url'=>array('index')),
array('label'=>'Create HistoriaClinicaPsicologia','url'=>array('create')),
array('label'=>'Update HistoriaClinicaPsicologia','url'=>array('update','id'=>$model->id_hc_psicologia)),
array('label'=>'Delete HistoriaClinicaPsicologia','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_hc_psicologia),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage HistoriaClinicaPsicologia','url'=>array('admin')),
);
?>

<h1>View HistoriaClinicaPsicologia #<?php echo $model->id_hc_psicologia; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_hc_psicologia',
		'paciente',
		'fecha_ingreso',
		'hora',
		'nombre_padre',
		'nombre_madre',
		'nombre_conyugue',
		'referido',
		'motivo_consulta',
		'enfermedad_actual',
		'antecedentes_familiares',
		'padre',
		'madre',
		'hermanos',
		'otros',
		'antecedentes_personales',
		'tabaco',
		'alcohol',
		'drogas',
		'otros_hp',
		'examen_fisico',
		'tension_alta',
		'frecuencia_cardiaca',
		'frecuencia_respiratoria',
		'talla',
		'peso',
		'pulso',
		'examen_mental',
		'impresion_diagnostica',
		'plan_tratamiento',
		'observacion',
		'comentarios',
		'estatus',
		'fecha_creacion',
		'fecha_actualizacion',
		'fk_usuario_creacion',
		'fk_usuario_actualizacion',
),
)); ?>
