<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_medico_horario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_medico_horario),array('view','id'=>$data->id_medico_horario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medico')); ?>:</b>
	<?php echo CHtml::encode($data->medico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia')); ?>:</b>
	<?php echo CHtml::encode($data->dia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_entrada')); ?>:</b>
	<?php echo CHtml::encode($data->hora_entrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_salida')); ?>:</b>
	<?php echo CHtml::encode($data->hora_salida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('es_activo')); ?>:</b>
	<?php echo CHtml::encode($data->es_activo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_actualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_actualizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_actualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_actualizacion); ?>
	<br />

	*/ ?>

</div>