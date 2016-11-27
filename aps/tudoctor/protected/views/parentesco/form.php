<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'parentesco-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'parentesco',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>

	<?php echo $form->checkBoxGroup($model,'status'); ?>
<!--
	<?php echo $form->datePickerGroup($model,'fecha_creacion',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

	<?php echo $form->textFieldGroup($model,'usuario_actualizacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'usuario_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->datePickerGroup($model,'fecha_actualizacion',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>
-->
<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'icon' =>'glyphicon glyphicon-refresh',
			'context'=>'success',
			'label'=>'Actualizar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
