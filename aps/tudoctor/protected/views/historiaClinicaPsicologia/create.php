<?php
$this->breadcrumbs=array(
	'Historia Clinica Psicologia'=>array('admin'),
	'Crear',
);

$this->menu=array(
array('label'=>'List HistoriaClinicaPsicologia','url'=>array('index')),
array('label'=>'Manage HistoriaClinicaPsicologia','url'=>array('admin')),
);
?>

<h1 class="titulo">Crear Historia Clinica Psicologia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
