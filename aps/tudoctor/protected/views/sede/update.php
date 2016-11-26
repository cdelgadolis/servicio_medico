<?php
$this->breadcrumbs=array(
	'Sedes'=>array('admin'),
);
?>

	<h1 class="titulo">Actualizar Sede N° <?php echo $model->id_sede; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
