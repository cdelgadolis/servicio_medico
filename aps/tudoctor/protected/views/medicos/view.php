<?php
$this->breadcrumbs=array(
	'Médicos'=>array('site/index'),
);
?>

<h1 class="titulo">Detalle Médico N° <?php echo $model->id_medico; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'type' => 'striped bordered condensed',
'attributes'=>array(
		'id_medico',
		'nombres',
		'apellidos',
		array(
			'label'=>'Sede',
			'name'=>'sede',
			'value' => $model->sede0->sede,
		),
		array(
			'label'=>'Especialidad',
			'name'=>'sede',
			'value' => $model->especialidad0->descripcion,
		),
		'telefono_oficina',
		'telefono_celular',
		'correo',
		'nro_medico',
		'cant_paciente_dia',
		'foto',
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
			'name'=>'status',
			'value' => $model->status == TRUE ? 'ACTIVO':'INACTIVO',
			),
),
)); ?>
