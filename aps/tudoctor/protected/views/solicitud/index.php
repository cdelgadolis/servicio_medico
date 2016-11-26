<?php
$this->breadcrumbs=array(
	'Solicituds',
);

$this->menu=array(
array('label'=>'Create Solicitud','url'=>array('create')),
array('label'=>'Manage Solicitud','url'=>array('admin')),
);
?>

<h1>Solicituds</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
