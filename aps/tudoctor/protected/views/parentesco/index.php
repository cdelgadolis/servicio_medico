<?php
$this->breadcrumbs=array(
	'Parentescos',
);

$this->menu=array(
array('label'=>'Create Parentesco','url'=>array('create')),
array('label'=>'Manage Parentesco','url'=>array('admin')),
);
?>

<h1>Parentescos</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
