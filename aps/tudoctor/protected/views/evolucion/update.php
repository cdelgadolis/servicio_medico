<?php
$this->breadcrumbs=array(
	'Evolución'=>array('admin'),
);

?>

	<h1>Actualizar Evolución <?php echo $model->id_evaluacion; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
