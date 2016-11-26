<?php
$this->breadcrumbs=array(
	'Estados'=>array('admin'),
);
?>

<h1 class="titulo">Detalle Estado N° <?php echo $model->id_estado; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'type' => 'striped bordered condensed',
'attributes'=>array(
		'id_estado',
		'nombre',
		'siglas',
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
