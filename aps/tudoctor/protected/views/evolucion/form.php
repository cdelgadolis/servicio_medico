<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'evolucion-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Datos Básicos</h3>
  </div>
  <div class="panel-body">
    
    <?php echo $form->textFieldGroup($model,'paciente',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'motivo_consulta',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>30)))); ?>
    
  </div>
</div>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Signos Vitales</h3>
  </div>
  <div class="panel-body">
    <?php echo $form->textFieldGroup($model,'tension_alta',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>20)))); ?>

	<?php echo $form->textFieldGroup($model,'frecuencia_cardiaca',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>20)))); ?>

	<?php echo $form->textFieldGroup($model,'frecuencia_respiratoria',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>20)))); ?>

	<?php echo $form->textFieldGroup($model,'peso',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>10)))); ?>

	<?php echo $form->textFieldGroup($model,'talla',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>10)))); ?>

	<?php echo $form->textFieldGroup($model,'pulso',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>10)))); ?>

	<?php echo $form->textFieldGroup($model,'circunferencia_cefalica',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>20)))); ?>

	<?php echo $form->textFieldGroup($model,'circunferencia_abdominal',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>20)))); ?>

	<?php echo $form->textFieldGroup($model,'otros_sv',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>
  </div>
</div>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Examen Físico</h3>
  </div>
  <div class="panel-body">
    <?php echo $form->textAreaGroup($model,'examen_fisico', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>
  </div>
</div>	

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Examenes Paraclinicos</h3>
  </div>
  <div class="panel-body">
    <?php echo $form->textAreaGroup($model,'laboratorio', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

	<?php echo $form->textAreaGroup($model,'imageneologia', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

	<?php echo $form->textAreaGroup($model,'otros_examenes', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>
  </div>
</div>


<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Impresión Diagnostica (IDX)</h3>
  </div>
  <div class="panel-body">
    <?php echo $form->textAreaGroup($model,'impresion_diagnostica', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>
  </div>
</div>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Plan o Tratamiento</h3>
  </div>
  <div class="panel-body">
    <?php echo $form->textAreaGroup($model,'plan_tratamiento', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>
  </div>
</div>	

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Reposo</h3>
  </div>
  <div class="panel-body">
    <?php echo $form->checkBoxGroup($model,'reposo'); ?>

	<?php echo $form->textAreaGroup($model,'observacion', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>
  </div>
</div>

<!--
	<?php echo $form->datePickerGroup($model,'fecha_creacion',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

	<?php echo $form->textFieldGroup($model,'usuario_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->datePickerGroup($model,'fecha_actualizacion',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

	<?php echo $form->textFieldGroup($model,'usuario_actualizacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->checkBoxGroup($model,'status'); ?>
-->
<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'icon' =>'glyphicon glyphicon-refresh',
			'context'=>'primary',
			'label'=>'Actualizar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
