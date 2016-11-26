<?php
$this->breadcrumbs=array(
	'Reposos'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Reposo','url'=>array('index')),
array('label'=>'Manage Reposo','url'=>array('admin')),
);
?>

<h1>Create Reposo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>