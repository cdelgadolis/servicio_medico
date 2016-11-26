<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_patologia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tipo_patologia),array('view','id'=>$data->id_tipo_patologia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patologia')); ?>:</b>
	<?php echo CHtml::encode($data->patologia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_actualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_actualizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_actualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_actualizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>