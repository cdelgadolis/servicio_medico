<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_solicitud')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_solicitud),array('view','id'=>$data->id_solicitud)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->fk_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_sede')); ?>:</b>
	<?php echo CHtml::encode($data->fk_sede); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_especialidad')); ?>:</b>
	<?php echo CHtml::encode($data->fk_especialidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_solicitud')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_solicitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo_consulta')); ?>:</b>
	<?php echo CHtml::encode($data->motivo_consulta); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('medico_referido')); ?>:</b>
	<?php echo CHtml::encode($data->medico_referido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('es_activo')); ?>:</b>
	<?php echo CHtml::encode($data->es_activo); ?>
	<br />

	*/ ?>

</div>