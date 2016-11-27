<?php
$this->breadcrumbs=array(
	'Institucion'=>array('admin')
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('institucion-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1 class="titulo">Institución</h1>
<!--
<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
-->
<div class="izquierda2">
<?php $this->widget(
'booster.widgets.TbButton', array(
'buttonType' => 'link', 
'size' => 'default',
'icon' =>'glyphicon glyphicon-plus',
'context' => 'primary',
'url'=>Yii::app()->createUrl('institucion/create'),
// 'url' => '#',
'label' => '  Crear Institución' )
 );
 ?>
 </div>
 <br/>
<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'institucion-grid',
'type' => 'striped bordered condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_institucion' => array(
			'header' => 'N°',
			'name' => 'id_institucion',
			'value' => '$data->id_institucion',
			'htmlOptions' => array('width' => '80', 'style' => 'text-align: center;'),
			),
		'nombre',
		'rif' => array(
			'header' => 'RIF',
			'name' => 'rif',
			'value' => '$data->rif',
			'htmlOptions' => array('width' => '120', 'style' => 'text-align: right;'),
			),
		'direccion',
		'telefono',
		'telefono2',
		'status'=> array(
			'header'=>'Estatus',
			'name'=>'status',
			'value' =>'$data->status == TRUE ? \'ACTIVO\':\'INACTIVO\'' ,
			'filter' => array( 'TRUE' =>'ACTIVO', 'FALSE' =>'INACTIVO'),
		),
		/*
		'fecha_creacion',
		'usuario_actualizacion',
		'usuario_creacion',
		'fecha_actualizacion',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
