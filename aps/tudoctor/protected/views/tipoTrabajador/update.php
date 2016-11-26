<?php
$this->breadcrumbs=array(
	'Tipo Trabajador'=>array('admin'),
);
?>

	<h1 class="titulo">Actualizar Tipo de Trabajador N° <?php echo $model->id_tipo_trabajador; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
