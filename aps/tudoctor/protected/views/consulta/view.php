<?php
$this->breadcrumbs=array(
	'Consultas'=>array('admin'),
	$model->id_consulta,
);

$this->menu=array(
array('label'=>'List Consulta','url'=>array('index')),
array('label'=>'Create Consulta','url'=>array('create')),
array('label'=>'Update Consulta','url'=>array('update','id'=>$model->id_consulta)),
array('label'=>'Delete Consulta','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_consulta),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Consulta','url'=>array('admin')),
);
?>

<h1 class="titulo">Detalle Tipo de Consulta N°<?php echo $model->id_consulta; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'type' => 'striped bordered condensed',
'attributes'=>array(
		'id_consulta',
		'descripcion',
		'status' => array(
			'label' => 'Estatus',
			'value' => $model->status == 1 ? 'Activo':'Inactivo',
			),
		array(
			'label'=>'Fecha Creación',
			'name'=>'fecha_creacion',
			'value' => Yii::app()->dateFormatter->format("dd/MM/yyyy", strtotime($model->fecha_creacion)),
		),
		array(
			'label'=>'Usuario Creación',
			'name'=>'fk_usuario_creacion',
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
			'name'=>'fk_usuario_actualizacion',
			'value' =>$model->usuarioActualizacion == NULL  ? '<i>No asignado</i>' : $model->usuarioActualizacion->id_usuario." - ". $model->fkUsuarioActualizacion->nombre,
			),
),
)); ?>
