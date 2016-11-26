<?php
$this->breadcrumbs=array(
	'Médicos'=>array('admin'),
	'Crear',
);
?>

<h1 class="titulo">Crear Médicos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
