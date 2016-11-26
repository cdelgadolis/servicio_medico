<?php
$this->breadcrumbs=array(
	'Patologiases',
);

$this->menu=array(
array('label'=>'Create Patologias','url'=>array('create')),
array('label'=>'Manage Patologias','url'=>array('admin')),
);
?>

<h1>Patologiases</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
