<?php
$this->breadcrumbs=array(
	'Historia Clinicas'=>array('admin'),
);

$this->menu=array(
array('label'=>'List HistoriaClinica','url'=>array('index')),
array('label'=>'Create HistoriaClinica','url'=>array('create')),
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

<div class="izquierda2">
<?php $this->widget(
'booster.widgets.TbButton', array(
'buttonType' => 'link', 
'size' => 'default',
'icon' =>'glyphicon glyphicon-plus',
'context' => 'primary',
'url'=>Yii::app()->createUrl('historiaClinica/buscarpaciente'),
// 'url' => '#',
'label' => '  Crear Historia Clinica General' )
 );
 ?>
 </div>
 <br>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'historia-clinica-grid',
'type' => 'striped bordered condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
			'id_historia_clinica' => array(
			'header' => 'N°',
			'name' => 'id_historia_clinica',
			'value' => '$data->id_historia_clinica',
			'htmlOptions' => array('width' => '80', 'style' => 'text-align: center;'),
			),
		'paciente' => array(
			'header' => 'Paciente',
			'name' => 'paciente',
			'value' => '$data->paciente0->nombre."  ". $data->paciente0->apellido',
			'htmlOptions' => array('width' => '160','style' => 'text-align: center;'),
			),
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
