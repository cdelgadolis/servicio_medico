<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'estado-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'nombre',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>

	<?php echo $form->textFieldGroup($model,'siglas',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>2)))); ?>

	<?php echo $form->checkBoxGroup($model,'estatus'); ?>
	
<!--
	<?php echo $form->textFieldGroup($model,'fecha_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'fecha_actualizacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'fk_usuario_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'fk_usuario_actualizacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
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
