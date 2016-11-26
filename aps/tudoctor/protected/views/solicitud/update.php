<?php
$this->breadcrumbs=array(
	'Solicituds'=>array('index'),
	$model->id_solicitud=>array('view','id'=>$model->id_solicitud),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Solicitud','url'=>array('index')),
	array('label'=>'Create Solicitud','url'=>array('create')),
	array('label'=>'View Solicitud','url'=>array('view','id'=>$model->id_solicitud)),
	array('label'=>'Manage Solicitud','url'=>array('admin')),
	);
	?>

	<h1>Update Solicitud <?php echo $model->id_solicitud; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>