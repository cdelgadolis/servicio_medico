<?php
$this->breadcrumbs=array(
	'Tipo Trabajadors',
);

$this->menu=array(
array('label'=>'Create TipoTrabajador','url'=>array('create')),
array('label'=>'Manage TipoTrabajador','url'=>array('admin')),
);
?>

<h1>Tipo Trabajadors</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
