<?php
$this->breadcrumbs=array(
	'Médicos'=>array('admin'),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('medicos-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1 class="titulo">Médicos</h1>

<div class="izquierda2">
<?php $this->widget(
'booster.widgets.TbButton', array(
'buttonType' => 'link', 
'size' => 'default',
'icon' =>'glyphicon glyphicon-plus',
'context' => 'primary',
'url'=>Yii::app()->createUrl('medicos/create'),
// 'url' => '#',
'label' => '  Crear Médico' )
 );
 ?>
 </div>
 <br/>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'medicos-grid',
'type' => 'striped bordered condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_medico' => array(
			'header' => 'ID',
			'name' => 'id_medico',
			'value' => '$data->id_medico',
			'htmlOptions' => array('width' => '80', 'style' => 'text-align: center;'),
			),
		'nombres',
		'apellidos',
		'sede' => array(
			'header' => 'Sede',
			'name' => 'sede',
			'value' => '$data->sede0->sede',
			'filter' =>  CHtml::listData(Sede::model()->findAll(), 'id_sede', 'sede'),
			'htmlOptions' => array('width' => '280', 'style' => 'text-align: center;'),
			),
		'especialidad' => array(
			'header' => 'Especialidad',
			'name' => 'especialidad',
			'value' => '$data->especialidad0->descripcion',
			//'filter' =>  CHtml::listData(Especialidad::model()->findAll(), 'id_especialidad', 'descripcion'),
			'htmlOptions' => array('width' => '240', 'style' => 'text-align: center;'),
			),
		'telefono_oficina',
		'telefono_celular',
		/*
		'correo',
		'status',
		'nro_medico',
		'cant_paciente_dia',
		'foto',
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
