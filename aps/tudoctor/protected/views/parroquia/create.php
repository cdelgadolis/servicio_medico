<?php
$this->breadcrumbs=array(
	'Parroquias'=>array('admin'),
	'Crear',
);
?>

<h1 class="titulo">Crear Parroquia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
