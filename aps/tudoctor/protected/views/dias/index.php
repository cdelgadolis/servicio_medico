<?php
$this->breadcrumbs=array(
	'Diases',
);

$this->menu=array(
array('label'=>'Create Dias','url'=>array('create')),
array('label'=>'Manage Dias','url'=>array('admin')),
);
?>

<h1>Diases</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
