<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_usuario),array('view','id'=>$data->id_usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clave')); ?>:</b>
	<?php echo CHtml::encode($data->clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_oficina')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_oficina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_celular')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_celular); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('correo')); ?>:</b>
	<?php echo CHtml::encode($data->correo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estatus')); ?>:</b>
	<?php echo CHtml::encode($data->estatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perfil')); ?>:</b>
	<?php echo CHtml::encode($data->perfil); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_usuario_actualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->fk_usuario_actualizacion); ?>
	<br />

	*/ ?>

</div>