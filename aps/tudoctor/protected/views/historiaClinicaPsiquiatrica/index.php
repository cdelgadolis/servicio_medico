<?php
$this->breadcrumbs=array(
	'Historia Clinica Psiquiatricas',
);

$this->menu=array(
array('label'=>'Create HistoriaClinicaPsiquiatrica','url'=>array('create')),
array('label'=>'Manage HistoriaClinicaPsiquiatrica','url'=>array('admin')),
);
?>

<h1>Historia Clinica Psiquiatricas</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
