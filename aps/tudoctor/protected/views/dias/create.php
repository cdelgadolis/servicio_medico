<?php
$this->breadcrumbs=array(
	'Días'=>array('admin'),
	'Crear',
);

?>

<h1 class="titulo">Crear Día</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
