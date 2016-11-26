<?php
$this->breadcrumbs=array(
	'Patologías'=>array('admin'),
);
?>

	<h1 class="titulo">Actualizar Patología N° <?php echo $model->id_tipo_patologia; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
