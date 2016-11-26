<?php
$this->breadcrumbs=array(
	'Parentescos'=>array('admin'),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('parentesco-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1 class="titulo">Parentescos</h1>

<div class="izquierda2">
<?php $this->widget(
'booster.widgets.TbButton', array(
'buttonType' => 'link', 
'size' => 'default',
'icon' =>'glyphicon glyphicon-plus',
'context' => 'primary',
'url'=>Yii::app()->createUrl('parentesco/create'),
// 'url' => '#',
'label' => '  Crear Parentesco' )
 );
 ?>
 </div>
 <br/>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'parentesco-grid',
'type' => 'striped bordered condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_parentesco' => array(
			'header' => 'N°',
			'name' => 'id_parentesco',
			'value' => '$data->id_parentesco',
			'htmlOptions' => array('width' => '80', 'style' => 'text-align: center;'),
			),
		'parentesco',
		'fecha_creacion'=>array(
			'header'=>'Fecha Creación',
			'name'=>'fecha_creacion',
			'value' => 'Yii::app()->dateFormatter->format("dd/MM/yyyy", strtotime($data->fecha_creacion))' ,
			'htmlOptions'=>array('width'=>'120px',  'style' => 'text-align: center;'),
		),
		'usuario_creacion' => array(
			'header' => 'Usuario Creación',
			'name' => 'usuario_creacion',
			'value' => '$data->usuarioCreacion->id_usuario." - ". $data->usuarioCreacion->nombre',
			'htmlOptions' => array('width' => '200', 'style' => 'text-align: center;'),
			),
		'status'=> array(
			'header'=>'Estatus',
			'name'=>'status',
			'value' =>'$data->status == TRUE ? \'ACTIVO\':\'INACTIVO\'' ,
			'filter' => array( 'TRUE' =>'ACTIVO', 'FALSE' =>'INACTIVO'),
			'htmlOptions' => array('width' => '200', 'style' => 'text-align: center;'),
		),
		/*
		'usuario_actualizacion',
		'fecha_actualizacion',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
