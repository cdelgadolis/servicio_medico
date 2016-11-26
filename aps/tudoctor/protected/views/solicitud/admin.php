<?php
$this->breadcrumbs=array(
	'Solicitud'=>array('admin'),
);

$this->menu=array(
array('label'=>'List Solicitud','url'=>array('index')),
array('label'=>'Create Solicitud','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('solicitud-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1 class="titulo">Solicitud de Citas</h1>


<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'solicitud-grid',
'type' => 'striped bordered condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_solicitud',
		'fk_paciente',
		'fk_sede',
		'fk_especialidad',
		'fecha_solicitud',
		'hora',
		/*
		'motivo_consulta',
		'medico_referido',
		'fecha_creacion',
		'usuario_creacion',
		'es_activo',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
