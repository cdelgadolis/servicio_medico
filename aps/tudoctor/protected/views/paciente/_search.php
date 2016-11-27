<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldGroup($model,'id_paciente',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'cedula',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>15)))); ?>

		<?php echo $form->textFieldGroup($model,'numero_historia',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>15)))); ?>

		<?php echo $form->textFieldGroup($model,'nombre',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>70)))); ?>

		<?php echo $form->textFieldGroup($model,'apellido',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>70)))); ?>

		<?php echo $form->textFieldGroup($model,'fecha_nacimiento',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'sexo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>1)))); ?>

		<?php echo $form->textFieldGroup($model,'estado_civil',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'tipo_persona',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'tipo_trabajador',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'institucion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'departamento',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>90)))); ?>

		<?php echo $form->textFieldGroup($model,'ocupacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>90)))); ?>

		<?php echo $form->textFieldGroup($model,'cedula_representante',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>15)))); ?>

		<?php echo $form->textFieldGroup($model,'nombre_representante',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>70)))); ?>

		<?php echo $form->textFieldGroup($model,'parentesco',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'fk_estado',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'direccion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

		<?php echo $form->textFieldGroup($model,'lugar_nacimiento',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

		<?php echo $form->textFieldGroup($model,'telefono_celular',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>15)))); ?>

		<?php echo $form->textFieldGroup($model,'telefono_oficina',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>15)))); ?>

		<?php echo $form->textFieldGroup($model,'telefono_fijo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>15)))); ?>

		<?php echo $form->textFieldGroup($model,'correo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50)))); ?>

		<?php echo $form->textFieldGroup($model,'foto',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

		<?php echo $form->checkBoxGroup($model,'estatus'); ?>

		<?php echo $form->textFieldGroup($model,'fecha_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'fecha_actualizacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'fk_usuario_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'fk_usuario_actualizacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'nacionalidad',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>1)))); ?>

		<?php echo $form->textFieldGroup($model,'correo_sec',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50)))); ?>

		<?php echo $form->textFieldGroup($model,'estado',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<div class="form-actions">
		<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType' => 'submit',
			'context'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
