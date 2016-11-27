<?php
$this->breadcrumbs=array(
	'Pacientes'=>array('create'),
	'Crear',
);
?>

<h1 class="titulo">Paciente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
