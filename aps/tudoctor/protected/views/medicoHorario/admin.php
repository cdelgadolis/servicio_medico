<?php
$this->breadcrumbs=array(
	'Medico Horarios'=>array('admin'),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('medico-horario-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1 class="titulo">Médico Horarios</h1>

<div class="izquierda2">
<?php $this->widget(
'booster.widgets.TbButton', array(
'buttonType' => 'link', 
'size' => 'default',
'icon' =>'glyphicon glyphicon-plus',
'context' => 'primary',
'url'=>Yii::app()->createUrl('medicoHorario/create'),
// 'url' => '#',
'label' => '  Crear Horario' )
 );
 ?>
 </div>
 <br/>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'medico-horario-grid',
'type' => 'striped bordered condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_medico_horario' => array(
			'header' => 'ID',
			'name' => 'id_medico_horario',
			'value' => '$data->id_medico_horario',
			'htmlOptions' => array('width' => '80', 'style' => 'text-align: center;'),
			),
		'medico' => array(
			'header' => 'Médico',
			'name' => 'medico',
			'value' => '$data->medico0->nombres." ". $data->medico0->apellidos',
			'filter' =>  CHtml::listData(Medicos::model()->findAll(), 'id_medico', 'nombres'),
			'htmlOptions' => array('width' => '280', 'style' => 'text-align: center;'),
			),
		'dia' => array(
			'header' => 'Día',
			'name' => 'dia',
			'value' => '$data->dia0->dia',
			'filter' =>  CHtml::listData(Dias::model()->findAll(), 'id_dia', 'dia'),
			'htmlOptions' => array('style' => 'text-align: center;'),
			),
		'hora_entrada',
		'hora_salida',
		'es_activo'=> array(
			'header'=>'Estatus',
			'name'=>'es_activo',
			'value' =>'$data->es_activo == TRUE ? \'ACTIVO\':\'INACTIVO\'' ,
			'filter' => array( 'TRUE' =>'ACTIVO', 'FALSE' =>'INACTIVO'),
			'htmlOptions' => array('width' => '100', 'style' => 'text-align: center;'),
		),
		/*
		'fecha_creacion',
		'usuario_creacion',
		'fecha_actualizacion',
		'usuario_actualizacion',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
