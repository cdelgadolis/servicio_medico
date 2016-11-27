<?php
$this->breadcrumbs=array(
	'Estados'=>array('admin'),
);

?>

	<h1 class="titulo">Actualizar Estado N° <?php echo $model->id_estado; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
