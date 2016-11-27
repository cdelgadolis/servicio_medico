<?php
$this->breadcrumbs=array(
	'Evolucions',
);

$this->menu=array(
array('label'=>'Create Evolucion','url'=>array('create')),
array('label'=>'Manage Evolucion','url'=>array('admin')),
);
?>

<h1>Evolucions</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
