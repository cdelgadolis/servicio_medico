<?php
$this->breadcrumbs=array(
	'Evolución'=>array('admin'),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('evolucion-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1 class="titulo">Evolución</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'evolucion-grid',
'type' => 'striped bordered condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_evaluacion' => array(
			'header' => 'N°',
			'name' => 'id_evaluacion',
			'value' => '$data->id_evaluacion',
			'htmlOptions' => array('width' => '80', 'style' => 'text-align: center;'),
			),
		'paciente',
		'motivo_consulta',
		'status',
		/*
		'tension_alta',
		'frecuencia_cardiaca',
		'frecuencia_respiratoria',
		'peso',
		'talla',
		'pulso',
		'circunferencia_cefalica',
		'circunferencia_abdominal',
		'otros_sv',
		'examen_fisico',
		'laboratorio',
		'imageneologia',
		'otros_examenes',
		'impresion_diagnostica',
		'plan_tratamiento',
		'reposo',
		'observacion',
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
