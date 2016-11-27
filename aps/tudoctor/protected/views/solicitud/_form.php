<?php
$anio=date('Y');

$today=date('Y-m-d');

$form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'solicitud-form',
	'enableAjaxValidation'=>true,
)); ?>

<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'fk_paciente',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->dropDownListGroup($model,'fk_sede',array(
		'widgetOptions' => array(
		'data' => CHtml::listData(Sede::model()->findAll(array('order'=>'sede')), 'id_sede', 'sede'),
		'htmlOptions' => array(
			'empty' => 'Seleccione...', 
			'style' => 'width: 400px; ',
			'ajax' => array(
				'type'=>'POST', 
				'url'=>Yii::app()->createUrl('solicitud/cargarEspecialidadPorSede'), 
				'update'=>'#Solicitud_fk_especialidad', 
				'data'=>array('sede'=>'js:this.value'),
		  )	),
		) ) ); ?>

	<?php echo $form->dropDownListGroup($model,'fk_especialidad', array(
		'wrapperHtmlOptions' => array(
		'class' => 'col-sm-5',
		),
		'widgetOptions' => array(
		//'data' => CHtml::listData(Especialidad::model()->findAll(array('order'=>'descripcion')), 'id_especialidad', 'descripcion'),
		'htmlOptions' => array(
			'empty' => 'Seleccione...', 
			'style' => 'width: 400px; ',
			'ajax' => array(
				'type'=>'POST', 
				'url'=>Yii::app()->createUrl('solicitud/cargarEspecialidadPorMedico'), 
				'update'=>'#Solicitud_fk_medico', 
				'data'=>array('especialidad'=>'js:this.value'),
		  )	),
		) ) ); ?>

		<?php echo $form->dropDownListGroup($model,'fk_medico', array(
		'wrapperHtmlOptions' => array(
		'class' => 'col-sm-5',
		),
		'widgetOptions' => array(
		//'data' => CHtml::listData(Especialidad::model()->findAll(array('order'=>'descripcion')), 'id_especialidad', 'descripcion'),
		'htmlOptions' => array('empty' => 'Seleccione...', 'style' => 'width: 400px; ',),
		)
		)
		); ?>
	
	<?php echo $form->datePickerGroup($model,'fecha_solicitud',array('widgetOptions'=>array('options'=>array('format'=>'yyyy/mm/dd', 'language' => 'es', 'todayBtn'=>'true', 'startDate'=>'$today', 'endDate'=>'$anio/12/31'),'htmlOptions'=>array('style' => 'width: 200px;' ) ), /*'hint' => 'Haga click en la caja de texto para seleccionar la fecha.',*/
'prepend' => '<i class="glyphicon glyphicon-calendar"></i>')); ?>

		<?php echo $form->labelEx($model, 'hora'); ?>
            <?php
            $this->widget(
                    'booster.widgets.TbTimePicker', array(
                'model' => $model,
                'id' => CHtml::activeId($model, 'hora'),
                'attribute' => 'hora',
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
<br>

	<?php echo $form->textFieldGroup($model,'motivo_consulta',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 400px; ','class'=>'span5','maxlength'=>300)))); ?>

	<?php echo $form->textFieldGroup($model,'medico_referido',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 400px; ','class'=>'span5','maxlength'=>200)))); ?>

<!--
	<?php echo $form->checkBoxGroup($model,'es_activo'); ?>

	<?php echo $form->datePickerGroup($model,'fecha_creacion',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

	<?php echo $form->textFieldGroup($model,'usuario_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

-->

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'icon' =>'glyphicon glyphicon-ok',
			'context'=>'primary',
			'label'=>'Solicitar Cita',
		)); ?>
</div>

<?php $this->endWidget(); ?>
