<?php
$this->breadcrumbs=array(
	'Municipios'=>array('admin'),
);
?>

	<h1 class="titulo">Actualizar Municipio N° <?php echo $model->id_municipio; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
