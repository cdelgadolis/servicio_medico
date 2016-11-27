<?php
$this->breadcrumbs=array(
	'Pacientes'=>array('admin'),
);
?>

	<h1 class="titulo">Actualizar Paciente <?php echo $model->id_paciente; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
