<?php
$this->breadcrumbs=array(
	'Historia Clinicas',
);

$this->menu=array(
array('label'=>'Create HistoriaClinica','url'=>array('create')),
array('label'=>'Manage HistoriaClinica','url'=>array('admin')),
);
?>

<h1>Historia Clinicas</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
