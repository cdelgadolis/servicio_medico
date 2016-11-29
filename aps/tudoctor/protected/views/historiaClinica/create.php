<?php
$this->breadcrumbs=array(
	'Historia Clinicas'=>array('admin'),
);

$this->menu=array(
array('label'=>'List HistoriaClinica','url'=>array('index')),
array('label'=>'Manage HistoriaClinica','url'=>array('admin')),
);
?>

<h1 class="titulo">Crear Historia Clinica General</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'paciente'=>$paciente)); ?>
