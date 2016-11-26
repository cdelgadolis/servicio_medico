<?php
$this->breadcrumbs=array(
	'Historia Clinica Psiquiatrica'=>array('admin'),
	'Crear',
);

$this->menu=array(
array('label'=>'List HistoriaClinicaPsiquiatrica','url'=>array('index')),
array('label'=>'Manage HistoriaClinicaPsiquiatrica','url'=>array('admin')),
);
?>

<h1 class="titulo">Crear Historia Clinica Psiquiatrica</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
