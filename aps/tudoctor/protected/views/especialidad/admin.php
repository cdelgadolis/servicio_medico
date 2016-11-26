<?php
$this->breadcrumbs=array(
	'Especialidades'=>array('admin'),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('especialidad-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1 class="titulo">Especialidades</h1>

<div class="izquierda2">
<?php $this->widget(
'booster.widgets.TbButton', array(
'buttonType' => 'link', 
'size' => 'default',
'icon' =>'glyphicon glyphicon-plus',
'context' => 'primary',
'url'=>Yii::app()->createUrl('especialidad/create'),
// 'url' => '#',
'label' => '  Crear Especialidad' )
 );
 ?>
 </div>
 <br/>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'especialidad-grid',
'type' => 'striped bordered condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_especialidad' => array(
			'header' => 'N°',
			'name' => 'id_especialidad',
			'value' => '$data->id_especialidad',
			'htmlOptions' => array('width' => '80', 'style' => 'text-align: center;'),
			),
		'descripcion',
		'sede' => array(
			'header' => 'Sede',
			'name' => 'sede',
			'value' => '$data->sede0->sede',
			'filter' =>  CHtml::listData(Sede::model()->findAll(), 'id_sede', 'sede'),
			'htmlOptions' => array('width' => '380','style' => 'text-align: center;'),
			),
		'es_activo'=> array(
			'header'=>'Estatus',
			'name'=>'es_activo',
			'value' =>'$data->es_activo == TRUE ? \'ACTIVO\':\'INACTIVO\'' ,
			'filter' => array( 'TRUE' =>'ACTIVO', 'FALSE' =>'INACTIVO'),
			'htmlOptions' => array('width' => '100', 'style' => 'text-align: center;'),
		),
		/*
		'usuario_creacion',
		'usuario_actualizacion',
		'fecha_creacion',
		'fecha_actualizacion',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
