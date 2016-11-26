<?php
$this->breadcrumbs=array(
	'Solicitud',
);

?>

<h1 class="titulo">Generar Solicitud de Cita</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
