<?php
$this->breadcrumbs=array(
	'Parroquias'=>array('admin'),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('parroquia-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1 class="titulo">Parroquias</h1>

<div class="izquierda2">
<?php $this->widget(
'booster.widgets.TbButton', array(
'buttonType' => 'link', 
'size' => 'default',
'icon' =>'glyphicon glyphicon-plus',
'context' => 'primary',
'url'=>Yii::app()->createUrl('parroquia/create'),
// 'url' => '#',
'label' => '  Crear Parroquia' )
 );
 ?>
 </div>
 <br/>
 
<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'parroquia-grid',
'type' => 'striped bordered condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_parroquia' => array(
			'header' => 'N°',
			'name' => 'id_parroquia',
			'value' => '$data->id_parroquia',
			'htmlOptions' => array('width' => '80', 'style' => 'text-align: center;'),
			),
		'municipio',
		'nombre',
		'fecha_creacion'=>array(
			'header'=>'Fecha Creación',
			'name'=>'fecha_creacion',
			'value' => 'Yii::app()->dateFormatter->format("dd/MM/yyyy", strtotime($data->fecha_creacion))' ,
			'htmlOptions'=>array('width'=>'120px',  'style' => 'text-align: center;'),
		),
		'fk_usuario_creacion' => array(
			'header' => 'Usuario Creación',
			'name' => 'fk_usuario_creacion',
			'value' => '$data->fkUsuarioCreacion->id_usuario." - ". $data->fkUsuarioCreacion->nombre',
			'htmlOptions' => array('width' => '200', 'style' => 'text-align: center;'),
			),
		'estatus'=> array(
			'header'=>'Estatus',
			'name'=>'estatus',
			'value' =>'$data->estatus == TRUE ? \'ACTIVO\':\'INACTIVO\'' ,
			'filter' => array( 'TRUE' =>'ACTIVO', 'FALSE' =>'INACTIVO'),
			'htmlOptions' => array('width' => '200', 'style' => 'text-align: center;'),
		),
		/*
		'fecha_actualizacion',
		'fk_usuario_actualizacion',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
