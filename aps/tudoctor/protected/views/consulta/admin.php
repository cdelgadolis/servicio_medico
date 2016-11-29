<?php
$this->breadcrumbs=array(
	'Consultas'=>array('admin'),
);

$this->menu=array(
array('label'=>'List Consulta','url'=>array('index')),
array('label'=>'Create Consulta','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('consulta-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1 class="titulo">Tipo de Consulta</h1>
<div class="izquierda2">
<?php $this->widget(
'booster.widgets.TbButton', array(
'buttonType' => 'link', 
'size' => 'default',
'icon' =>'glyphicon glyphicon-plus',
'context' => 'primary',
'url'=>Yii::app()->createUrl('consulta/create'),
// 'url' => '#',
'label' => '  Crear Tipo de Consulta' )
 );
 ?>
 </div>
 <br/>
 <br/>


<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'consulta-grid',
'type' => 'striped bordered condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_consulta' => array(
			'header' => 'N°',
			'name' => 'id_consulta',
			'value' => '$data->id_consulta',
			'htmlOptions' => array('width' => '80', 'style' => 'text-align: center;'),
			),
		'descripcion',
		'fecha_creacion'=> array(
			'header'=>'Fecha de Creación',
			'name'=>'fecha_creacion',
			'value' => 'Yii::app()->dateFormatter->format("dd/MM/yyyy", strtotime($data->fecha_creacion))' ,
			'htmlOptions'=>array('width'=>'120px',  'style' => 'text-align: center;'),
		),
		'usuario_creacion' => array(
			'header' => 'Usuario de Creación',
			'name' => 'usuario_creacion',
			'value' => '$data->usuarioCreacion->id_usuario." - ". $data->usuarioCreacion->nombre',
			'htmlOptions' => array('width' => '180', 'style' => 'text-align: center;'),
			),
		'fecha_actualizacion'=> array(
			'header'=>'Fecha de Actalización',
			'name'=>'fecha_actualizacion',
			'value' => 'Yii::app()->dateFormatter->format("dd/MM/yyyy", strtotime($data->fecha_actualizacion))' ,
			'htmlOptions'=>array('width'=>'120px',  'style' => 'text-align: center;'),
		),
		'usuario_actualizacion' => array(
			'header' => 'Usuario de Actualización',
			'name' => 'usuario_actualizacion',
			'value'=>'$data->usuarioActualizacion == NULL ? \' ----- \' : $data->usuarioActualizacion->usuario." - ". $data->usuarioActualizacion->nombre_razon',
			'htmlOptions' => array('width' => '180', 'style' => 'text-align: center'),
			),
		'status'=> array(
			'header'=>'Estatus',
			'name'=>'status',
			'value' =>'$data->status == TRUE ? \'ACTIVO\':\'ANULADO\'' ,
			'filter' => array( 'TRUE' =>'ACTIVO', 'FALSE' =>'ANULADO'),
			'htmlOptions'=>array('style' => 'text-align: center;'),
		),
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
