<?php
$this->breadcrumbs=array(
	'Especialidades'=>array('admin'),
	'Crear',
);
;
?>

<h1 class="titulo">Crear Especialidad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
