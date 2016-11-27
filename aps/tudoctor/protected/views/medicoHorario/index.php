<?php
$this->breadcrumbs=array(
	'Medico Horarios',
);

$this->menu=array(
array('label'=>'Create MedicoHorario','url'=>array('create')),
array('label'=>'Manage MedicoHorario','url'=>array('admin')),
);
?>

<h1>Medico Horarios</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
