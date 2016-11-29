<?php
$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->id_paciente,
);

$this->menu=array(
array('label'=>'List Paciente','url'=>array('index')),
array('label'=>'Create Paciente','url'=>array('create')),
array('label'=>'Update Paciente','url'=>array('update','id'=>$model->id_paciente)),
array('label'=>'Delete Paciente','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_paciente),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Paciente','url'=>array('admin')),
);
?>

<h1>Paciente: <?php echo $model->nombre." ".$model->apellido; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_paciente',
		'cedula',
		'numero_historia',
		'nombre',
		'apellido',
		'fecha_nacimiento',
		'sexo',
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
		'foto',
		'estatus',
		'fecha_creacion',
		'fecha_actualizacion',
		'fk_usuario_creacion',
		'fk_usuario_actualizacion',
		'nacionalidad',
		'correo_sec',
		'estado',
),
)); ?>
