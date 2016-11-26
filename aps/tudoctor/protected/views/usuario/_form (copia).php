<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>
	
	<!--<?php echo $form->textFieldGroup($model,'tipo_pers',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>1)))); ?>-->
<div >
	<?php echo $form->dropDownListGroup(
$model,
'tipo_pers',
array(
'wrapperHtmlOptions' => array(
'class' => 'col-sm-5',
),
'widgetOptions' => array(
'data' => array('Seleccione...', 'V', 'E', 'J', 'G'),
//'data' => CHtml::listData(Estado::model()->findAll(), 'id_estado', 'nombre'),
'htmlOptions' => array('style' => 'width: 130px; ',),
)
)
); ?>

	<?php echo $form->textFieldGroup($model,'usuario',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>10,'style' => 'width: 130px; ')))); ?>
		
 <div class='col-md-8'>
<?php
echo CHtml::ajaxLink(' Buscar RIF', 
   Yii::app()->createUrl('usuario/buscarRif' ),
 array(
	'data' => 'js:{"rif": $("#Usuario_tipo_pers option:selected").text() + $("#Usuario_usuario").val() }',
    'success'=>'js:function(datarif){
		'/*$("#btn-seguir-V160277390").fadeIn();
		$("#btn-dejarseguir-V160277390").fadeOut();
		alert(datarif);*/.'
		$("#Usuario_nombre_razon").val(datarif);
 }'           
),array(
    'id'    => 'btn-buscar-rif',
    'class' => 'buscarseniat btn btn-info small-btn glyphicon glyphicon-search',
   // 'onMouseOver' => '$("#btn-dejarseguir-'.$data->id_usuario.'").text("Dejar de Seguir");',
   // 'onMouseOut' => '$("#btn-dejarseguir-'.$data->id_usuario.'").text("Siguiendo");',
    //'confirm'=>'Estas seguro de querer dejar de seguir a '.$data->nombre_completo.'?' //Confirmation
    ));
?>

</div>	
	</div>
	<br/>
	<br/>
	<?php echo $form->textFieldGroup($model,'nombre_razon',array('widgetOptions'=>array('htmlOptions'=>array('readonly'=>'true', 'class'=>'span5','maxlength'=>255)))); ?>
	
	<!--<?php echo $form->textFieldGroup($model,'clave',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>80)))); ?>-->

	<?php echo $form->passwordFieldGroup($model, 'clave'); ?>

	<?php echo $form->textFieldGroup($model,'correo_ppal',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50,'style' => 'width: 400px; ')))); ?>

	<?php echo $form->textFieldGroup($model,'correo_sec',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50,'style' => 'width: 400px; ')))); ?>

	<!--<?php echo $form->textFieldGroup($model,'telefono_fijo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>15)))); ?>-->
	
	<?php echo $form->textFieldGroup($model,'telefono_fijo',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ')))); ?>
	
	<!--<?php /*
$this->widget('CMaskedTextField', array(
'model' => $model,
'attribute' => 'telefono_fijo',
'mask' => '(9999)-999-9999',
'htmlOptions' => array('class'=>'span5','size' =>15)
));  */
?>-->

	<?php echo $form->textFieldGroup($model,'telefono_celular',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ')))); ?>
	
	<!--<?php
$this->widget('CMaskedTextField', array(
'model' => $model,
'attribute' => 'telefono_celular',
'mask' => '(9999)-999-9999',
'htmlOptions' => array('class'=>'span5','size' =>15)
));
?>-->
	
	<?php echo $form->textFieldGroup($model,'fax',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ')))); ?>

	<!--<?php
$this->widget('CMaskedTextField', array(
'model' => $model,
'attribute' => 'fax',
'mask' => '(9999)-999-9999',
'htmlOptions' => array('class'=>'span5','size' =>15)
));
?>-->
	<!--<?php echo $form->textFieldGroup($model,'fk_estado',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>-->
	<?php echo $form->dropDownListGroup(
$model,
'fk_estado',
array(
'wrapperHtmlOptions' => array(
'class' => 'col-sm-5',
),
'widgetOptions' => array(
//'data' => array('Something ...', '1', '2', '3', '4', '5'),
'data' => CHtml::listData(Estado::model()->findAll(), 'id_estado', 'nombre'),
'htmlOptions' => array('style' => 'width: 150px; ',),
)
)
); ?>

	<?php echo $form->textAreaGroup($model,'direccion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>
	
	
	<!--
	<?php echo $form->checkBoxGroup($model,'estatus'); ?>

	<?php echo $form->textFieldGroup($model,'perfil',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>20)))); ?>

	<?php echo $form->textFieldGroup($model,'fecha_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'fecha_actualizacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'fk_usuario_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'fk_usuario_actualizacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	-->
	<br/>
	<br/>
	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>
	<br/>
<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Registrarse' : 'Save',
		)); ?>
		
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'reset',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Limpiar Formulario' : 'Reset',
		)); ?>
</div>

<?php $this->endWidget(); ?>
