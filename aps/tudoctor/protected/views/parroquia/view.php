<?php
$this->breadcrumbs=array(
	'Parroquias'=>array('admin'),
	$model->id_parroquia,
);
?>

<h1 class="titulo">Detalle Parroquia N° <?php echo $model->id_parroquia; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_parroquia',
		'municipio',
		'nombre',
		array(
			'label'=>'Fecha Creación',
			'name'=>'fecha_creacion',
			'value' => Yii::app()->dateFormatter->format("dd/MM/yyyy", strtotime($model->fecha_creacion)),
		),
		array(
			'label'=>'Usuario Creación',
			'name'=>'usuario_creacion',
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
			'name'=>'usuario_actualizacion',
			'value' =>$model->fkUsuarioActualizacion == NULL  ? '<i>No asignado</i>' : $model->fkUsuarioActualizacion->id_usuario." - ". $model->fkUsuarioActualizacion->nombre,
			),
		array(
			'label'=>'Estatus',
			'name'=>'estatus',
			'value' => $model->estatus == TRUE ? 'ACTIVO':'ANULADO',
			),
),
)); ?>
