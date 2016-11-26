<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'medico-horario-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

<div class="row">
  <div class="col-md-4">
	 <?php echo $form->dropDownListGroup($model,'medico', array(
		'wrapperHtmlOptions' => array(
		'class' => 'col-sm-5',
		),
		'widgetOptions' => array(
		'data' => CHtml::listData(Medicos::model()->findAll(array('condition'=>'status=TRUE', 'order'=>'nombres')), 'id_medico', 'nombres'),
		'htmlOptions' => array('empty' => 'Seleccione...', 'style' => 'width: 200px; ',),
		)
		)
		); ?>
	  </div>
  <div class="col-md-4">
  <?php echo $form->dropDownListGroup($model,'dia', array(
		'wrapperHtmlOptions' => array(
		'class' => 'col-sm-5',
		),
		'widgetOptions' => array(
		'data' => CHtml::listData(Dias::model()->findAll(array('condition'=>'status=TRUE', 'order'=>'dia')), 'id_dia', 'dia'),
		'htmlOptions' => array('empty' => 'Seleccione...', 'style' => 'width: 200px; ',),
		)
		)
		); ?>
  </div>
</div>

<div class="row">
	
<div class='col-md-4'>
            <?php echo $form->labelEx($model, 'hora_entrada'); ?>
            <?php
            $this->widget(
                    'booster.widgets.TbTimePicker', array(
                'model' => $model,
                'id' => CHtml::activeId($model, 'hora_entrada'),
                'attribute' => 'hora_entrada',
                'options' => array(
                    'showMeridian' => true,
                    'minuteStep' => 60,
                ),
                'wrapperHtmlOptions' => array(
                    'class' => 'col-md-3',
                ),
                )
         );
?>
</div>
	
<div class='col-md-4'>
            <?php echo $form->labelEx($model, 'hora_salida'); ?>
            <?php
            $this->widget(
                    'booster.widgets.TbTimePicker', array(
                'model' => $model,
                'id' => CHtml::activeId($model, 'hora_salida'),
                'attribute' => 'hora_salida',
                'options' => array(
                    'showMeridian' => true,
                    'minuteStep' => 60,
                ),
                'wrapperHtmlOptions' => array(
                    'class' => 'col-md-3',
                ),
                )
         );
?>
</div>
</div>
<br>

<!--
	<?php echo $form->checkBoxGroup($model,'es_activo'); ?>

	<?php echo $form->datePickerGroup($model,'fecha_creacion',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

	<?php echo $form->textFieldGroup($model,'usuario_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->datePickerGroup($model,'fecha_actualizacion',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

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
