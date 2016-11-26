<?php
$this->breadcrumbs=array(
	'Municipios'=>array('admin'),
	'Crear',
);
?>

<h1 class="titulo">Crear Municipio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
