<?php
$this->breadcrumbs=array(
	'Actividades'=>array('admin'),
	'Crear',
);

?>

<h1 class="titulo">Crear Actividad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
