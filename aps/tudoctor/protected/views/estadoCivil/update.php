<?php
$this->breadcrumbs=array(
	'Estado Civil'=>array('admin'),
);
?>

	<h1 class="titulo">Actualizar Estado Civil N° <?php echo $model->id_edo_civil; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
