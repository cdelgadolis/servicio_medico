<?php
$this->breadcrumbs=array(
	'Médico Horarios'=>array('admin'),
);

?>

	<h1 class="titulo">Actualizar Horario ID: <?php echo $model->medico0->nombres."  ". $model->medico0->apellidos; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
