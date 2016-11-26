<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_medico')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_medico),array('view','id'=>$data->id_medico)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres')); ?>:</b>
	<?php echo CHtml::encode($data->nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('especialidad')); ?>:</b>
	<?php echo CHtml::encode($data->especialidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_oficina')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_oficina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_celular')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo')); ?>:</b>
	<?php echo CHtml::encode($data->correo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_medico')); ?>:</b>
	<?php echo CHtml::encode($data->nro_medico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cant_paciente_dia')); ?>:</b>
	<?php echo CHtml::encode($data->cant_paciente_dia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
	<?php echo CHtml::encode($data->foto); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('sede')); ?>:</b>
	<?php echo CHtml::encode($data->sede); ?>
	<br />

	*/ ?>

</div>