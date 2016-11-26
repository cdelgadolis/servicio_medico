<?php
$this->breadcrumbs=array(
	'Historia Clinicas'=>array('admin'),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('historia-clinica-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1 class="titulo">Historia Clinicas</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'historia-clinica-grid',
'dataProvider'=>$model->search(),
'type' => 'striped bordered condensed',
'filter'=>$model,
'columns'=>array(
		'id_historia_clinica',
		'paciente',
		'peso',
		'talla',
		'frecuencia_cardiaca',
		'frecuencia_respiratoria',
		/*
		'tension_alta',
		'pulso',
		'circunferencia_cefalica',
		'circunferencia_abdominal',
		'otros',
		'alergico',
		'medicacion',
		'enfermedades',
		'observacion',
		'comentarios',
		'impresion_diagnostica',
		'tratamiento',
		'evolucion',
		'laboratorio',
		'examenes_otros',
		'estatus',
		'fecha_creacion',
		'fecha_actualizacion',
		'fk_usuario_creacion',
		'fk_usuario_actualizacion',
		'imageneologia',
		'plan_tratamiento',
		'examen_fisico',
		'motivo_consulta',
		'enfermedad_actual',
		'antecedentes_personales',
		'padre',
		'madre',
		'hermanos',
		'otros_hp',
		'fumar',
		'alcohol',
		'cafe',
		'drogas',
		'm_mejillas',
		'm_labios',
		'm_unas',
		'otros_habitosp',
		'FRS',
		'FUR',
		'PRS',
		'CICLO',
		'sinusorragia',
		'orgasmos',
		'maridos',
		'infeccion_ur',
		'dispareunia',
		'libido',
		'AVM',
		'DIU',
		'EIP',
		'ACO',
		'lactancia',
		'puerperio',
		'gestas',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
