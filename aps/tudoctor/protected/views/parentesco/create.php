<?php
$this->breadcrumbs=array(
	'Parentescos'=>array('admin'),
	'Crear',
);
?>

<h1 class="titulo">Crear Parentesco</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
