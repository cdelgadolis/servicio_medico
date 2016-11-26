<?php
$this->breadcrumbs=array(
	'Parroquias'=>array('admin'),
);
?>

	<h1 class="tiulo">Actualizar Parroquia N° <?php echo $model->id_parroquia; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
