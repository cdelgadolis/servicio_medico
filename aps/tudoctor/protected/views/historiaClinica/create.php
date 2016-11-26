<?php
$this->breadcrumbs=array(
	'Historia Clinicas'=>array('admin'),
	'Create',
);
?>

<h1 class="titulo">Crear Historia Clinica</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
