<?php
$this->breadcrumbs=array(
	'Actividad',
);

$this->menu=array(
array('label'=>'Create Actividad','url'=>array('create')),
array('label'=>'Manage Actividad','url'=>array('admin')),
);
?>

<h1 class="titulo">Actividades</h1>

<?php 
echo CHtml::openTag('div', array('class' => 'row-fluid'));
$this->widget(
    'booster.widgets.TbThumbnails',
    array(
        'dataProvider' => $dataProvider,
        'template' => "{items}\n{pager}",
        'itemView' => '_view',
    )
);
echo CHtml::closeTag('div')
?>
