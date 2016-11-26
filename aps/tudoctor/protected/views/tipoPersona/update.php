<?php
$this->breadcrumbs=array(
	'Tipo Personas'=>array('admin'),
);
?>

	<h1 class="titulo">Actualizar TipoPersona N° <?php echo $model->id_tipo_persona; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
