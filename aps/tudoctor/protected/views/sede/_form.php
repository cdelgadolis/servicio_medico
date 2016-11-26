<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'sede-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>
<div class="row">

<div class='col-xs-6 col-md-4'>

	<?php echo $form->textFieldGroup($model,'sede',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>
</div>
<div class='col-xs-6 col-md-4'>
   <?php echo $form->dropDownListGroup($model,'estado', array(
		'wrapperHtmlOptions' => array(
		'class' => 'col-sm-5',
		),
		'widgetOptions' => array(
		'data' => CHtml::listData(Estado::model()->findAll(array('condition'=>'estatus=TRUE', 'order'=>'nombre')), 'id_estado', 'nombre'),
		'htmlOptions' => array('empty' => 'Seleccione...', 'style' => 'width: 200px; ',),
		)
		)
		); ?>	
</div>

</div>

<div class="row">
<div class="col-sm-9">
	<?php echo $form->textFieldGroup($model,'direccion',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 906px; ','class'=>'span5','maxlength'=>500)))); ?>
</div>
</div>
<div class="row">
<div class='col-xs-6 col-md-4'>
   	<?php echo $form->textFieldGroup($model,'telefono_1',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ','class'=>'span5','maxlength'=>15)))); ?>
<!--<?php
$this->widget('CMaskedTextField', array(
'model' => $model,
'attribute' => 'telefono_1',
'mask' => '(9999)-999-9999',
'htmlOptions' => array('class'=>'span5','size' =>15)
));
?>-->	
</div>	
	
<div class='col-xs-6 col-md-4'>	
	<?php echo $form->textFieldGroup($model,'telefono_2',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ','class'=>'span5','maxlength'=>15)))); ?>
<!--<?php
$this->widget('CMaskedTextField', array(
'model' => $model,
'attribute' => 'telefono_2',
'mask' => '(9999)-999-9999',
'htmlOptions' => array('class'=>'span5','size' =>15)
));
?>-->
</div>	

<div class='col-xs-6 col-md-4'>	
	<?php echo $form->textFieldGroup($model,'telefono_3',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ','class'=>'span5','maxlength'=>15)))); ?>
<!--<?php
$this->widget('CMaskedTextField', array(
'model' => $model,
'attribute' => 'telefono_3',
'mask' => '(9999)-999-9999',
'htmlOptions' => array('class'=>'span5','size' =>15)
));
?>-->
</div>
</div>
<div class="row">
	
<div class='col-md-4'>
            <?php echo $form->labelEx($model, 'horario_entrada'); ?>
            <?php
            $this->widget(
                    'booster.widgets.TbTimePicker', array(
                'model' => $model,
                'id' => CHtml::activeId($model, 'horario_entrada'),
                'attribute' => 'horario_entrada',
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
            <?php echo $form->labelEx($model, 'horario_salida'); ?>
            <?php
            $this->widget(
                    'booster.widgets.TbTimePicker', array(
                'model' => $model,
                'id' => CHtml::activeId($model, 'horario_salida'),
                'attribute' => 'horario_salida',
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
<div class="row">
	<div class='col-xs-6 col-md-4'>
	<?php echo $form->textFieldGroup($model,'correo_sede',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	</div>
	<div class='col-xs-6 col-md-4'>
   	<?php echo $form->fileFieldGroup($model,'foto_sede',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>
	</div>	
</div>

<div class="row">
	<div class='col-xs-6 col-md-4'>
	 <?php echo $form->textFieldGroup($model,'cedula_responsable',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ','class'=>'span5','maxlength'=>15)))); ?>	
</div>
	<div class='col-xs-6 col-md-4'>
	<?php echo $form->textFieldGroup($model,'nombre_responsable',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 250px; ','class'=>'span5','maxlength'=>50)))); ?>	
	</div>
	
</div>

<div class="row">
	<div class="col-sm-9">
	<?php echo $form->textFieldGroup($model,'contacto',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>
</div>	
</div>
<!--
	<?php echo $form->checkBoxGroup($model,'es_activo'); ?>

	<?php echo $form->textFieldGroup($model,'fecha_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'fecha_actualizacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'fk_usuario_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'fk_usuario_actualizacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
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
