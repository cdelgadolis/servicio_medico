<?php
$this->breadcrumbs=array(
	'Actividades'=>array('admin'),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('actividad-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1 class="titulo">Actividades</h1>

<div class="izquierda2">
<?php $this->widget(
'booster.widgets.TbButton', array(
'buttonType' => 'link', 
'size' => 'default',
'icon' =>'glyphicon glyphicon-plus',
'context' => 'primary',
'url'=>Yii::app()->createUrl('actividad/create'),
// 'url' => '#',
'label' => '  Crear Actividad' )
 );
 ?>
 </div>
 <br/>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'actividad-grid',
'type' => 'striped bordered condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_actividad' => array(
			'header' => 'N°',
			'name' => 'id_actividad',
			'value' => '$data->id_actividad',
			'htmlOptions' => array('width' => '80', 'style' => 'text-align: center;'),
			),
		'actividad',
		'fk_sede' => array(
			'header' => 'Sede',
			'name' => 'fk_sede',
			'value' => '$data->fkSede->sede',
			'htmlOptions' => array('width' => '200', 'style' => 'text-align: left;'),
			),
		'lugar',
		'responsable' => array(
			'header' => 'Responsable',
			'name' => 'responsable',
			'value' => '$data->responsable',
			'htmlOptions' => array('width' => '150', 'style' => 'text-align: center;'),
			),
		'hora_entrada' => array(
			'header' => 'Hora Inicio',
			'name' => 'hora_entrada',
			'value' => '$data->hora_entrada',
			'htmlOptions' => array('width' => '90', 'style' => 'text-align: center;'),
			),
		'hora_salida' => array(
			'header' => 'Hora Final',
			'name' => 'hora_salida',
			'value' => '$data->hora_salida',
			'htmlOptions' => array('width' => '90', 'style' => 'text-align: center;'),
			),
		/*
		'fecha_entrada',
		'fecha_salida',
		'fk_estatus',
		'es_activo',
		'fecha_creacion',
		'usuario_creacion',
		'fecha_actualizacion',
		'usuario_actualizacion',
		'descripcion',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
