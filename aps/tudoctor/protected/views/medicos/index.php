<?php
$this->breadcrumbs=array(
	'Medicoses',
);

$this->menu=array(
array('label'=>'Create Medicos','url'=>array('create')),
array('label'=>'Manage Medicos','url'=>array('admin')),
);
?>

<h1>Medicoses</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
