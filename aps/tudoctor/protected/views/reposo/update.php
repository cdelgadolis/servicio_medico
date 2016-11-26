<?php
$this->breadcrumbs=array(
	'Reposos'=>array('index'),
	$model->id_reposo=>array('view','id'=>$model->id_reposo),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Reposo','url'=>array('index')),
	array('label'=>'Create Reposo','url'=>array('create')),
	array('label'=>'View Reposo','url'=>array('view','id'=>$model->id_reposo)),
	array('label'=>'Manage Reposo','url'=>array('admin')),
	);
	?>

	<h1>Update Reposo <?php echo $model->id_reposo; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>