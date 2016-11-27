<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'medicos-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

<div class="row">
	<div class="col-xs-6">
	<?php echo $form->textFieldGroup($model,'nombres',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 400px; ','class'=>'span5','maxlength'=>100)))); ?>
	</div>
	<div class="col-xs-6">
	<?php echo $form->textFieldGroup($model,'apellidos',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 400px; ','class'=>'span5','maxlength'=>100)))); ?>
	</div>
</div>
	
<div class="row">
	<div class="col-xs-6">
	<?php echo $form->dropDownListGroup($model,'sede', array(
		'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
		'widgetOptions' => array(
		'data' => CHtml::listData(Sede::model()->findAll(array('order'=>'sede')), 'id_sede', 'sede'),
		'htmlOptions' => array(
			'empty' => 'Seleccione...', 
			'style' => 'width: 400px; ',
			'ajax' => array(
				'type'=>'POST', 
				'url'=>Yii::app()->createUrl('medicos/cargarEspecialidadPorSede'), 
				'update'=>'#Medicos_especialidad', 
				'data'=>array('sede'=>'js:this.value'),
		  )	),
		) ) );
		?>
	</div>
	<div class="col-xs-6">
	<?php echo $form->dropDownListGroup($model,'especialidad', array(
		'wrapperHtmlOptions' => array(
		'class' => 'col-sm-5',
		),
		'widgetOptions' => array(
		//'data' => CHtml::listData(Especialidad::model()->findAll(array('order'=>'descripcion')), 'id_especialidad', 'descripcion'),
		'htmlOptions' => array('empty' => 'Seleccione...', 'style' => 'width: 400px; ',),
		)
		)
		); ?>
	</div>
</div>


<div class="row">

	<div class='col-xs-6 col-md-4'>
   	<?php echo $form->textFieldGroup($model,'telefono_oficina',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ','class'=>'span5','maxlength'=>15)))); ?>
<!--<?php
$this->widget('CMaskedTextField', array(
'model' => $model,
'attribute' => 'telefono_oficina',
'mask' => '(9999)-999-9999',
'htmlOptions' => array('class'=>'span5','size' =>15)
));
?>-->	
</div>	
	
<div class='col-xs-6 col-md-4'>	
	<?php echo $form->textFieldGroup($model,'telefono_celular',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ','class'=>'span5','maxlength'=>15)))); ?>
<!--<?php
$this->widget('CMaskedTextField', array(
'model' => $model,
'attribute' => 'telefono_celular',
'mask' => '(9999)-999-9999',
'htmlOptions' => array('class'=>'span5','size' =>15)
));
?>-->
</div>	
	
</div>
	
<div class="row">
	<div class='col-xs-6 col-md-4'>
	<?php echo $form->textFieldGroup($model,'nro_medico',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ','class'=>'span5','maxlength'=>50)))); ?>
	</div>
	<div class='col-xs-6 col-md-4'>
   	<?php echo $form->textFieldGroup($model,'cant_paciente_dia',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ','class'=>'span5')))); ?>
	</div>	
</div>
	
	
<div class="row">
	<div class='col-xs-6 col-md-4'>
	<?php echo $form->textFieldGroup($model,'correo',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 250px; ','class'=>'span5','maxlength'=>50)))); ?>
	</div>
	<div class='col-xs-6 col-md-4'>
   	<?php echo $form->fileFieldGroup($model,'foto',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>
	</div>	
	<div class='col-xs-6 col-md-4'>
   	<?php echo $form->checkBoxGroup($model,'status'); ?>
	</div>
</div>
		
<!--
	<?php echo $form->datePickerGroup($model,'fecha_creacion',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

	<?php echo $form->textFieldGroup($model,'usuario_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->datePickerGroup($model,'fecha_actualizacion',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

	<?php echo $form->textFieldGroup($model,'usuario_actualizacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
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
