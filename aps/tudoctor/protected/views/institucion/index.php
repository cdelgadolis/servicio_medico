<?php
$this->breadcrumbs=array(
	'Institucions',
);

$this->menu=array(
array('label'=>'Create Institucion','url'=>array('create')),
array('label'=>'Manage Institucion','url'=>array('admin')),
);
?>

<h1>Institucions</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
