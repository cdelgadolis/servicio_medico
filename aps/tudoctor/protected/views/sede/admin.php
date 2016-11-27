<?php
$this->breadcrumbs=array(
	'Sedes'=>array('admin'),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('sede-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1 class="titulo">Sedes</h1>


<div class="izquierda2">
<?php $this->widget(
'booster.widgets.TbButton', array(
'buttonType' => 'link', 
'size' => 'default',
'icon' =>'glyphicon glyphicon-plus',
'context' => 'primary',
'url'=>Yii::app()->createUrl('sede/create'),
// 'url' => '#',
'label' => '  Crear Sede' )
 );
 ?>
 </div>
 <br/>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'sede-grid',
'type' => 'striped bordered condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_sede' => array(
			'header' => 'N°',
			'name' => 'id_sede',
			'value' => '$data->id_sede',
			'htmlOptions' => array('width' => '80', 'style' => 'text-align: center;'),
			),
		'sede',
		'direccion',
		'estado' => array(
			'header' => 'Estado',
			'name' => 'estado',
			'value' => '$data->estado0->nombre',
			'filter' =>  CHtml::listData(Estado::model()->findAll(), 'id_estado', 'nombre'),
			'htmlOptions' => array('width' => '110','style' => 'text-align: center;'),
			),
		'horario_entrada',
		'es_activo'=> array(
			'header'=>'Estatus',
			'name'=>'es_activo',
			'value' =>'$data->es_activo == TRUE ? \'ACTIVO\':\'INACTIVO\'' ,
			'filter' => array( 'TRUE' =>'ACTIVO', 'FALSE' =>'INACTIVO'),
			'htmlOptions' => array('style' => 'text-align: center;'),
		),
		/*
		'foto_sede',
		'horario_salida',
		'contacto',
		'correo_sede',
		'nombre_responsable',
		'cedula_responsable',
		'fecha_creacion',
		'fecha_actualizacion',
		'fk_usuario_creacion',
		'fk_usuario_actualizacion',
		'telefono_1',
		'telefono_2',
		'telefono_3',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
