<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_historia_clinica')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_historia_clinica),array('view','id'=>$data->id_historia_clinica)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paciente')); ?>:</b>
	<?php echo CHtml::encode($data->paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peso')); ?>:</b>
	<?php echo CHtml::encode($data->peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('talla')); ?>:</b>
	<?php echo CHtml::encode($data->talla); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('frecuencia_cardiaca')); ?>:</b>
	<?php echo CHtml::encode($data->frecuencia_cardiaca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('frecuencia_respiratoria')); ?>:</b>
	<?php echo CHtml::encode($data->frecuencia_respiratoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tension_alta')); ?>:</b>
	<?php echo CHtml::encode($data->tension_alta); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pulso')); ?>:</b>
	<?php echo CHtml::encode($data->pulso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('circunferencia_cefalica')); ?>:</b>
	<?php echo CHtml::encode($data->circunferencia_cefalica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('circunferencia_abdominal')); ?>:</b>
	<?php echo CHtml::encode($data->circunferencia_abdominal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otros')); ?>:</b>
	<?php echo CHtml::encode($data->otros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alergico')); ?>:</b>
	<?php echo CHtml::encode($data->alergico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medicacion')); ?>:</b>
	<?php echo CHtml::encode($data->medicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enfermedades')); ?>:</b>
	<?php echo CHtml::encode($data->enfermedades); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentarios')); ?>:</b>
	<?php echo CHtml::encode($data->comentarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('impresion_diagnostica')); ?>:</b>
	<?php echo CHtml::encode($data->impresion_diagnostica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tratamiento')); ?>:</b>
	<?php echo CHtml::encode($data->tratamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('evolucion')); ?>:</b>
	<?php echo CHtml::encode($data->evolucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('laboratorio')); ?>:</b>
	<?php echo CHtml::encode($data->laboratorio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('examenes_otros')); ?>:</b>
	<?php echo CHtml::encode($data->examenes_otros); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_usuario_actualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->fk_usuario_actualizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imageneologia')); ?>:</b>
	<?php echo CHtml::encode($data->imageneologia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plan_tratamiento')); ?>:</b>
	<?php echo CHtml::encode($data->plan_tratamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('examen_fisico')); ?>:</b>
	<?php echo CHtml::encode($data->examen_fisico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo_consulta')); ?>:</b>
	<?php echo CHtml::encode($data->motivo_consulta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enfermedad_actual')); ?>:</b>
	<?php echo CHtml::encode($data->enfermedad_actual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('antecedentes_personales')); ?>:</b>
	<?php echo CHtml::encode($data->antecedentes_personales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('padre')); ?>:</b>
	<?php echo CHtml::encode($data->padre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('madre')); ?>:</b>
	<?php echo CHtml::encode($data->madre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hermanos')); ?>:</b>
	<?php echo CHtml::encode($data->hermanos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otros_hp')); ?>:</b>
	<?php echo CHtml::encode($data->otros_hp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fumar')); ?>:</b>
	<?php echo CHtml::encode($data->fumar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alcohol')); ?>:</b>
	<?php echo CHtml::encode($data->alcohol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cafe')); ?>:</b>
	<?php echo CHtml::encode($data->cafe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('drogas')); ?>:</b>
	<?php echo CHtml::encode($data->drogas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_mejillas')); ?>:</b>
	<?php echo CHtml::encode($data->m_mejillas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_labios')); ?>:</b>
	<?php echo CHtml::encode($data->m_labios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_unas')); ?>:</b>
	<?php echo CHtml::encode($data->m_unas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otros_habitosp')); ?>:</b>
	<?php echo CHtml::encode($data->otros_habitosp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FRS')); ?>:</b>
	<?php echo CHtml::encode($data->FRS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FUR')); ?>:</b>
	<?php echo CHtml::encode($data->FUR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRS')); ?>:</b>
	<?php echo CHtml::encode($data->PRS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CICLO')); ?>:</b>
	<?php echo CHtml::encode($data->CICLO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sinusorragia')); ?>:</b>
	<?php echo CHtml::encode($data->sinusorragia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orgasmos')); ?>:</b>
	<?php echo CHtml::encode($data->orgasmos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maridos')); ?>:</b>
	<?php echo CHtml::encode($data->maridos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('infeccion_ur')); ?>:</b>
	<?php echo CHtml::encode($data->infeccion_ur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dispareunia')); ?>:</b>
	<?php echo CHtml::encode($data->dispareunia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('libido')); ?>:</b>
	<?php echo CHtml::encode($data->libido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AVM')); ?>:</b>
	<?php echo CHtml::encode($data->AVM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DIU')); ?>:</b>
	<?php echo CHtml::encode($data->DIU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EIP')); ?>:</b>
	<?php echo CHtml::encode($data->EIP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACO')); ?>:</b>
	<?php echo CHtml::encode($data->ACO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lactancia')); ?>:</b>
	<?php echo CHtml::encode($data->lactancia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('puerperio')); ?>:</b>
	<?php echo CHtml::encode($data->puerperio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gestas')); ?>:</b>
	<?php echo CHtml::encode($data->gestas); ?>
	<br />

	*/ ?>

</div>