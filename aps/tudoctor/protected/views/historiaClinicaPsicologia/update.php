<?php
$this->breadcrumbs=array(
	'Historia Clinica Psicologias'=>array('admin'),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'List HistoriaClinicaPsicologia','url'=>array('index')),
	array('label'=>'Create HistoriaClinicaPsicologia','url'=>array('create')),
	array('label'=>'View HistoriaClinicaPsicologia','url'=>array('view','id'=>$model->id_hc_psicologia)),
	array('label'=>'Manage HistoriaClinicaPsicologia','url'=>array('admin')),
	);
	?>

	<h1 class="titulo">Actualizar Historia Clinica Psicologica<br> Paciente: <?php echo $model->paciente0->nombre." ".$model->paciente0->apellido; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
