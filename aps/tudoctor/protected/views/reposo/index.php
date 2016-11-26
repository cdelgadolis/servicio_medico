<?php
$this->breadcrumbs=array(
	'Reposos',
);

$this->menu=array(
array('label'=>'Create Reposo','url'=>array('create')),
array('label'=>'Manage Reposo','url'=>array('admin')),
);
?>

<h1>Reposos</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
