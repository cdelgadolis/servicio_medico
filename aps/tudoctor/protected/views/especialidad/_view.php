<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_especialidad')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_especialidad),array('view','id'=>$data->id_especialidad)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sede')); ?>:</b>
	<?php echo CHtml::encode($data->sede); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('es_activo')); ?>:</b>
	<?php echo CHtml::encode($data->es_activo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_actualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_actualizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_creacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_actualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_actualizacion); ?>
	<br />

	*/ ?>

</div>