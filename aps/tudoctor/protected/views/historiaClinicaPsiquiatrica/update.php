<?php
$this->breadcrumbs=array(
	'Historia Clinica Psiquiatrica'=>array('admin'),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'List HistoriaClinicaPsiquiatrica','url'=>array('index')),
	array('label'=>'Create HistoriaClinicaPsiquiatrica','url'=>array('create')),
	array('label'=>'View HistoriaClinicaPsiquiatrica','url'=>array('view','id'=>$model->id_hc_psiquiatrica)),
	array('label'=>'Manage HistoriaClinicaPsiquiatrica','url'=>array('admin')),
	);
	?>

	<h1 class="titulo">Actualizar Historia Clinica Psicologica<br> Paciente: <?php echo $model->paciente0->nombre." ".$model->paciente0->apellido; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
