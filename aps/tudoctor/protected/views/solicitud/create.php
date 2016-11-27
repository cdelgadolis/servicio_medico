<?php
$this->breadcrumbs=array(
	'Solicitud'=>array('solicitud/create'),
);

$this->menu=array(
array('label'=>'List Solicitud','url'=>array('index')),
array('label'=>'Manage Solicitud','url'=>array('admin')),
);
?>

<h1 class="titulo">Solicitud de Cita Médica</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'paciente' => $paciente, 'fechasagotadas' => $fechasagotadas)); ?>
