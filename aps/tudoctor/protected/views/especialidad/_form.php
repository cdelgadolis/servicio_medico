<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'especialidad-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListGroup($model,'sede', array(
		'wrapperHtmlOptions' => array(
		'class' => 'col-sm-5',
		),
		'widgetOptions' => array(
		'data' => CHtml::listData(Sede::model()->findAll(array('condition'=>'es_activo=TRUE', 'order'=>'sede')), 'id_sede', 'sede'),
		'htmlOptions' => array('empty' => 'Seleccione...', 'style' => 'width: 400px; ',),
		)
		)
		); ?>

	<?php echo $form->textFieldGroup($model,'descripcion',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 450px; ','class'=>'span5','maxlength'=>100)))); ?>

	
<!--
	<?php echo $form->checkBoxGroup($model,'es_activo'); ?>

	<?php echo $form->textFieldGroup($model,'fecha_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'fecha_actualizacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'usuario_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'usuario_actualizacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
-->
<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'icon' =>'glyphicon glyphicon-ok',
			'context'=>'primary',
			'label'=>'Crear',
		)); ?>
</div>

<?php $this->endWidget(); ?>
