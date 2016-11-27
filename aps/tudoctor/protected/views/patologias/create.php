<?php
$this->breadcrumbs=array(
	'Patologías'=>array('admin'),
	'Crear',
);
?>

<h1 class="titulo">Crear Patología</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
