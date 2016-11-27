<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'actividad-form',
	'enableAjaxValidation'=>false,
)); ?>
<?php
$anio=date('Y');

$hoy = getdate();
//print_r($hoy);
?>
<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-8">
	<?php echo $form->textFieldGroup($model,'actividad',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 550px; ','class'=>'span5')))); ?>
	  </div>
  <div class="col-xs-6 col-md-4">
  <?php echo $form->dropDownListGroup($model,'fk_sede', array(
		'wrapperHtmlOptions' => array(
		'class' => 'col-sm-5',
		),
		'widgetOptions' => array(
		'data' => CHtml::listData(Sede::model()->findAll(array('order'=>'sede')), 'id_sede', 'sede'),
		'htmlOptions' => array('empty' => 'Seleccione...', 'style' => 'width: 200px; ',),
		)
		)
		); ?>
  </div>
</div>

	<?php echo $form->textAreaGroup($model,'descripcion', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

<div class="row">
  <div class="col-md-6">
  <?php echo $form->textFieldGroup($model,'lugar',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 450px; ','class'=>'span5','maxlength'=>100)))); ?>
  </div>
  <div class="col-md-6">
  <?php echo $form->textFieldGroup($model,'responsable',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 450px; ','class'=>'span5','maxlength'=>100)))); ?>
  </div>
</div>


<div class="row">
	
<div class='col-md-4'>
            <?php echo $form->datePickerGroup($model,'fecha_entrada',array('widgetOptions'=>array('options'=>array('format'=>'yyyy/mm/dd', 'language' => 'es', 'todayBtn'=>'true', 'startDate'=>'$hoy', 'endDate'=>'$anio/12/31'),'htmlOptions'=>array('style' => 'width: 200px;' ) ), /*'hint' => 'Haga click en la caja de texto para seleccionar la fecha.',*/
'prepend' => '<i class="glyphicon glyphicon-calendar"></i>')); ?>
	
</div>
	
<div class='col-md-4'>
            <?php echo $form->datePickerGroup($model,'fecha_salida',array('widgetOptions'=>array('options'=>array('format'=>'yyyy/mm/dd', 'language' => 'es', 'todayBtn'=>'true', 'startDate'=>'$hoy', 'endDate'=>'$anio/12/31'),'htmlOptions'=>array('style' => 'width: 200px;' ) ), /*'hint' => 'Haga click en la caja de texto para seleccionar la fecha.',*/
'prepend' => '<i class="glyphicon glyphicon-calendar"></i>')); ?>
	
</div>
</div>
<br>


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
	<?php echo $form->textFieldGroup($model,'fk_estatus',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 550px; ','class'=>'span5')))); ?>
	
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
