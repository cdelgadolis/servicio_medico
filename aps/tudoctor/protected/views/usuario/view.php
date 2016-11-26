<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id_usuario,
);

$this->menu=array(
array('label'=>'List Usuario','url'=>array('index')),
array('label'=>'Create Usuario','url'=>array('create')),
array('label'=>'Update Usuario','url'=>array('update','id'=>$model->id_usuario)),
array('label'=>'Delete Usuario','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_usuario),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Usuario','url'=>array('admin')),
);
?>

<h1>View Usuario #<?php echo $model->id_usuario; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_usuario',
		'usuario',
		'clave',
		'nombre',
		'apellido',
		'telefono_oficina',
		'telefono_celular',
		'correo',
		'estatus',
		'perfil',
		'fecha_creacion',
		'fecha_actualizacion',
		'fk_usuario_creacion',
		'fk_usuario_actualizacion',
),
)); ?>