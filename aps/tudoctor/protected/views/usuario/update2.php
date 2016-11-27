<?php
$this->pageTitle=Yii::app()->name . ' - Actualizar Datos';
$this->breadcrumbs=array(
	//'Usuarios'=>array('admin'),
	//$model->id_usuario=>array('view','id'=>$model->id_usuario),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'List Usuario','url'=>array('index')),
	array('label'=>'Create Usuario','url'=>array('create')),
	array('label'=>'View Usuario','url'=>array('view','id'=>$model->id_usuario)),
	array('label'=>'Manage Usuario','url'=>array('admin')),
	);
	?>

	<h1 class="titulo">Actualizar Datos de Usuario: <?php echo $model->usuario; ?></h1>

<?php echo $this->renderPartial('form',array('model'=>$model)); ?>
