<?php
$this->breadcrumbs=array(
	'Institucion'=>array('admin'),
	'Crear',
);

$this->menu=array(
array('label'=>'List Institucion','url'=>array('index')),
array('label'=>'Manage Institucion','url'=>array('admin')),
);
?>

<h1 class="titulo">Crear Institución</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
