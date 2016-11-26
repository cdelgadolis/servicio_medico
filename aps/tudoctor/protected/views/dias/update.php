<?php
$this->breadcrumbs=array(
	'Días'=>array('admin'),
);
?>

	<h1 class="titulo">Actualizar Día N° <?php echo $model->id_dia; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
