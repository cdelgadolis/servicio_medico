<?php
$this->breadcrumbs=array(
	'Historia Clinicas'=>array('admin'),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'List HistoriaClinica','url'=>array('index')),
	array('label'=>'Create HistoriaClinica','url'=>array('create')),
	array('label'=>'View HistoriaClinica','url'=>array('view','id'=>$model->id_historia_clinica)),
	array('label'=>'Manage HistoriaClinica','url'=>array('admin')),
	);
	?>

	<h1 class="titulo">Actualizar Historia Clinica General<br> Paciente: <?php echo $model->paciente0->nombre." ".$model->paciente0->apellido; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
