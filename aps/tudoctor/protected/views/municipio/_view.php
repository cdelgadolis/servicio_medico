<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_municipio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_municipio),array('view','id'=>$data->id_municipio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estatus')); ?>:</b>
	<?php echo CHtml::encode($data->estatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_actualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_actualizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_usuario_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fk_usuario_creacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_usuario_actualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->fk_usuario_actualizacion); ?>
	<br />

	*/ ?>

</div>