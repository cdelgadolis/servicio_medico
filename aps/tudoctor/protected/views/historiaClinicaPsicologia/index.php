<?php
$this->breadcrumbs=array(
	'Historia Clinica Psicologias',
);

$this->menu=array(
array('label'=>'Create HistoriaClinicaPsicologia','url'=>array('create')),
array('label'=>'Manage HistoriaClinicaPsicologia','url'=>array('admin')),
);
?>

<h1>Historia Clinica Psicologias</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
