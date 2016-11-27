<?php
$this->breadcrumbs=array(
	'Actividades'=>array('index'),
);
?>

<h1 class="titulo">Detalle Actividad N° <?php echo $model->id_actividad; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'type' => 'striped bordered condensed',
'attributes'=>array(
		'id_actividad',
		'actividad',
		'descripcion',
		array(
			'label'=>'Sede',
			'name'=>'fk_sede',
			'value' => $model->fkSede->sede,
		),
		'lugar',
		'responsable',
		'hora_entrada',
		'hora_salida',
		'fecha_entrada',
		'fecha_salida',
		'fecha_creacion',
		'usuario_creacion',
		/*'fecha_actualizacion',
		'usuario_actualizacion',
		'fk_estatus',
		'es_activo',*/
),
)); ?>
<br>
<div class="izquierda2">
<?php
$this->widget(
		'booster.widgets.TbButton', array(
		'buttonType' => 'link', 
		'size' => 'btn-lg',
		'icon' =>'glyphicon glyphicon-chevron-left',
		'context' => 'danger',
		'url'=>Yii::app()->createUrl('actividad/index'),
		'label' => '  Regresar' )
		);
?>
</div>
