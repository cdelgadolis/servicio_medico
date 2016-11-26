<?php
$this->breadcrumbs=array(
	'Especialidades'=>array('admin'),
);

?>

	<h1 class="titulo">Actualizar Especialidad N° <?php echo $model->id_especialidad; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
