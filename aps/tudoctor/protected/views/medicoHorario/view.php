<?php
$this->breadcrumbs=array(
	'Médico Horarios'=>array('admin'),
);

?>

<h1 class="titulo">Detalle Horario: <?php echo $model->medico0->nombres."  ". $model->medico0->apellidos; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'type' => 'striped bordered condensed',
'attributes'=>array(
		'id_medico_horario',
		array(
			'label'=>'Médico',
			'name'=>'medico',
			'value' => $model->medico0->nombres."  ". $model->medico0->apellidos,
		),
		array(
			'label'=>'Día',
			'name'=>'dia',
			'value' => $model->dia0->dia,
		),
		'hora_entrada',
		'hora_salida',
		array(
			'label'=>'Fecha Creación',
			'name'=>'fecha_creacion',
			'value' => Yii::app()->dateFormatter->format("dd/MM/yyyy", strtotime($model->fecha_creacion)),
		),
		array(
			'label'=>'Usuario Creación',
			'name'=>'usuario_creacion',
			'value' => $model->usuarioCreacion->id_usuario." - ". $model->usuarioCreacion->nombre,
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
			'name'=>'usuario_actualizacion',
			'value' =>$model->usuarioActualizacion == NULL  ? '<i>No asignado</i>' : $model->usuarioActualizacion->id_usuario." - ". $model->usuarioActualizacion->nombre,
			),
		array(
			'label'=>'Estatus',
			'name'=>'es_activo',
			'value' => $model->es_activo == TRUE ? 'ACTIVO':'INACTIVO',
			),
),
)); ?>
