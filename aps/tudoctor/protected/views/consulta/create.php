<?php
$this->breadcrumbs=array(
	'Consultas'=>array('admin'),
	'Crear',
);

$this->menu=array(
array('label'=>'List Consulta','url'=>array('index')),
array('label'=>'Manage Consulta','url'=>array('admin')),
);
?>

<h1 class="titulo">Crear Tipo de Consulta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
