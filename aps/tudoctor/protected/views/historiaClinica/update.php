<?php
$this->breadcrumbs=array(
	'Historia Clinicas'=>array('admin'),
);
?>

	<h1>Actualizar Historia Clinica N° <?php echo $model->id_historia_clinica; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
