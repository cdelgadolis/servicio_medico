<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_persona')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tipo_persona),array('view','id'=>$data->id_tipo_persona)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_persona')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_persona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_actualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_actualizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_actualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_actualizacion); ?>
	<br />


</div>