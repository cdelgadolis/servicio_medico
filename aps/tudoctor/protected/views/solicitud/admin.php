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

<h1 class="titulo">Solicitud de Citas Medicas</h1>
<!--
<div class="izquierda2">
<?php $this->widget(
'booster.widgets.TbButton', array(
'buttonType' => 'link', 
'size' => 'default',
'icon' =>'glyphicon glyphicon-plus',
'context' => 'primary',
'url'=>Yii::app()->createUrl('solicitud/create'),
// 'url' => '#',
'label' => '  Solicitar Cita Médica' )
 );
 ?>
 </div>-->
 <br/>
 
<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'solicitud-grid',
'type' => 'striped bordered condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_solicitud' => array(
			'header' => 'N°',
			'name' => 'id_solicitud',
			'value' => '$data->id_solicitud',
			'htmlOptions' => array('width' => '50', 'style' => 'text-align: center;'),
			),
		'fk_paciente' => array(
			'header' => 'Paciente ',
			'name' => 'fk_paciente',
			'value' => '$data->fkPaciente->nombre." ". $data->fkPaciente->apellido',
			'htmlOptions' => array('width' => '180', 'style' => 'text-align: center;'),
			),
		'fk_sede' => array(
			'header' => 'Sede',
			'name' => 'fk_sede',
			'value' => '$data->fkSede->sede',
			'filter' =>  CHtml::listData(Sede::model()->findAll(), 'id_sede', 'sede'),
			'htmlOptions' => array('width' => '200', 'style' => 'text-align: center;'),
			),
		'fk_especialidad' => array(
			'header' => 'Especialidad ',
			'name' => 'fk_especialidad',
			'value' => '$data->fkEspecialidad->descripcion',
			//'filter' =>  CHtml::listData(Especialidad::model()->findAll(), 'id_especialidad', 'descripcion'),
			'htmlOptions' => array('width' => '200', 'style' => 'text-align: center;'),
			),
		'fk_medico' => array(
			'header' => 'Médico ',
			'name' => 'fk_medico',
			'value' => '$data->fkMedico->nombres." ". $data->fkMedico->apellidos',
			'filter' =>  CHtml::listData(Medicos::model()->findAll(), 'id_medico', 'concate'),
			'htmlOptions' => array('width' => '200', 'style' => 'text-align: center;'),
			),
		'fecha_solicitud',
		'motivo_consulta',
		/*'hora',
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
