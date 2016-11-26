<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_reposo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_reposo),array('view','id'=>$data->id_reposo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paciente')); ?>:</b>
	<?php echo CHtml::encode($data->paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiempo_reposo')); ?>:</b>
	<?php echo CHtml::encode($data->tiempo_reposo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medida_reposo')); ?>:</b>
	<?php echo CHtml::encode($data->medida_reposo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estatus')); ?>:</b>
	<?php echo CHtml::encode($data->estatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_actualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_actualizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_usuario_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fk_usuario_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_usuario_actualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->fk_usuario_actualizacion); ?>
	<br />

	*/ ?>

</div>