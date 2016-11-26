<?php
$this->breadcrumbs=array(
	'Actividades'=>array('admin'),
);
?>

	<h1 class="titulo">Actualizar Actividad N° <?php echo $model->id_actividad; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
