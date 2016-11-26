<?php
$this->breadcrumbs=array(
	'Estado Civil'=>array('admin'),
	'Crear',
);
?>

<h1 class="titulo">Crear Estado Civil</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
