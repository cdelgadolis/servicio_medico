<?php
$this->breadcrumbs=array(
	'Consultas'=>array('admin'),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'List Consulta','url'=>array('index')),
	array('label'=>'Create Consulta','url'=>array('create')),
	array('label'=>'View Consulta','url'=>array('view','id'=>$model->id_consulta)),
	array('label'=>'Manage Consulta','url'=>array('admin')),
	);
	?>

	<h1 class="titulo">Actualizar Tipo de Consulta</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
