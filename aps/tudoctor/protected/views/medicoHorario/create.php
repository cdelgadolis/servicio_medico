<?php
$this->breadcrumbs=array(
	'Médico Horarios'=>array('admin'),
	'Crear',
);

?>

<h1 class="titulo">Crear Horario </h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
