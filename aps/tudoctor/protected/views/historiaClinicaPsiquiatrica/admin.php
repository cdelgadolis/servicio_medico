<?php
$this->breadcrumbs=array(
	'Historia Clinica Psiquiatrica'=>array('admin'),
);

$this->menu=array(
array('label'=>'List HistoriaClinicaPsiquiatrica','url'=>array('index')),
array('label'=>'Create HistoriaClinicaPsiquiatrica','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('historia-clinica-psiquiatrica-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1 class="titulo">Historia Clinica Psiquiatrica</h1>

<div class="izquierda2">
<?php $this->widget(
'booster.widgets.TbButton', array(
'buttonType' => 'link', 
'size' => 'default',
'icon' =>'glyphicon glyphicon-plus',
'context' => 'primary',
'url'=>Yii::app()->createUrl('historiaClinicaPsiquiatrica/create'),
// 'url' => '#',
'label' => '  Crear Historia Clinica Psiquiatrica' )
 );
 ?>
 </div>
 <br/>
 
<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'historia-clinica-psiquiatrica-grid',
'type' => 'striped bordered condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_hc_psiquiatrica',
		'paciente',
		'fecha_ingreso',
		'hora',
		'nombre_padre',
		'nombre_madre',
		/*
		'nombre_conyugue',
		'referido',
		'motivo_consulta',
		'enfermedad_actual',
		'antecedentes_familiares',
		'padre',
		'madre',
		'hermanos',
		'otros',
		'antecedentes_personales',
		'tabaco',
		'alcohol',
		'drogas',
		'otros_hp',
		'examen_fisico',
		'tension_alta',
		'frecuencia_cardiaca',
		'frecuencia_respiratoria',
		'talla',
		'peso',
		'pulso',
		'examen_mental',
		'impresion_diagnostica',
		'plan_tratamiento',
		'observacion',
		'comentarios',
		'estatus',
		'fecha_creacion',
		'fecha_actualizacion',
		'fk_usuario_creacion',
		'fk_usuario_actualizacion',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
