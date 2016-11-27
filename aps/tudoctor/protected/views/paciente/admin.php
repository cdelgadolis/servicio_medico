<?php
$this->breadcrumbs=array(
	'Pacientes'
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('paciente-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1 class="titulo">Pacientes</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'paciente-grid',
'type' => 'striped bordered condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_paciente' => array(
			'header' => 'N°',
			'name' => 'id_paciente',
			'value' => '$data->id_paciente',
			'htmlOptions' => array('width' => '80', 'style' => 'text-align: center;'),
			),
		'numero_historia',
		'nombre',
		'apellido',
		'cedula',
		'sexo',
		'fecha_nacimiento',
		'foto',
		/*
		'estado_civil',
		'tipo_persona',
		'tipo_trabajador',
		'institucion',
		'departamento',
		'ocupacion',
		'cedula_representante',
		'nombre_representante',
		'parentesco',
		'fk_estado',
		'direccion',
		'lugar_nacimiento',
		'telefono_celular',
		'telefono_oficina',
		'telefono_fijo',
		'correo',
		'estatus',
		'fecha_creacion',
		'fecha_actualizacion',
		'fk_usuario_creacion',
		'fk_usuario_actualizacion',
		'nacionalidad',
		'correo_sec',
		'estado',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
