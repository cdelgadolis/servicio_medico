<?php
$this->breadcrumbs=array(
	'Estados'=>array('admin'),
	'Crear',
);
?>

<h1 class="titulo">Crear Estado</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
