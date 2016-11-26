<?php
$this->breadcrumbs=array(
	'Parentescos'=>array('admin'),
);
?>

	<h1 class="titulo">Actualizar Parentesco N° <?php echo $model->id_parentesco; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
