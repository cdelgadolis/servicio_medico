<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Los campos con <span class="required">*</span> son obligatorios.</p><br/>

<?php echo $form->errorSummary($model); ?>
	
	<!--<?php echo $form->textFieldGroup($model,'tipo_pers',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>1)))); ?>-->
<div class="busqueda-rif" >
	<div class="izquierda">
		<?php echo $form->dropDownListGroup(
		$model,
		'tipo_pers',
		array(
		'wrapperHtmlOptions' => array(
		'class' => '',
		),
		'widgetOptions' => array(
		'data' => array($model->tipo_pers),
		//'data' => CHtml::listData(Estado::model()->findAll(), 'id_estado', 'nombre'),
		'htmlOptions' => array('disabled'=>'disabled','style' => 'width: 130px; ',),
		)
		)
		); ?>
	</div>
	<div class="centro">
	<?php echo $form->textFieldGroup($model,'usuario',array('widgetOptions'=>array('htmlOptions'=>array('readonly'=>'true', 'class'=>'','maxlength'=>10, 'style' => 'width: 130px; ')))); ?>
	</div>
	<div class="derecha">
			</div>
<?php echo '<div id="req_res_loading" class="derecha1"></div>'; ?>
	</div>


	<?php echo $form->textFieldGroup($model,'nombre_razon',array('widgetOptions'=>array('htmlOptions'=>array('readonly'=>'true', 'class'=>'span5','maxlength'=>255, 'style' => 'width: 800px; ')))); ?>
	
	<!--<?php echo $form->textFieldGroup($model,'clave',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>80)))); ?>-->
	<!--
	<?php echo $form->passwordFieldGroup($model, 'clave',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 400px; ')))); ?>
	-->
	<div class="busqueda-rif">
		<div class="posicion1">
	<?php echo $form->textFieldGroup($model,'correo_ppal',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50,'style' => 'width: 300px; ')))); ?>
		</div>
		<div class="posicion2">
	<?php echo $form->textFieldGroup($model,'correo_sec',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50,'style' => 'width: 300px; ')))); ?>
		</div>
	</div>
	<!--<?php echo $form->textFieldGroup($model,'telefono_fijo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>15)))); ?>-->
	<div class="busqueda-rif">
		<div class="izquierda1">
	<?php echo $form->textFieldGroup($model,'telefono_fijo',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ')))); ?>
	<!--<?php
$this->widget('CMaskedTextField', array(
'model' => $model,
'attribute' => 'telefono_fijo',
'mask' => '(9999)-999-9999',
'htmlOptions' => array('class'=>'span5','size' =>15)
));
?>-->	
	
		</div>
		<div class="izquierda1">
	<?php echo $form->textFieldGroup($model,'telefono_celular',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ')))); ?>
<!--<?php
$this->widget('CMaskedTextField', array(
'model' => $model,
'attribute' => 'telefono_celular',
'mask' => '(9999)-999-9999',
'htmlOptions' => array('class'=>'span5','size' =>15)
));
?>-->	

	</div>
	<div class="izquierda1">
	<?php echo $form->textFieldGroup($model,'fax',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ')))); ?>

	<!--<?php
$this->widget('CMaskedTextField', array(
'model' => $model,
'attribute' => 'fax',
'mask' => '(9999)-999-9999',
'htmlOptions' => array('class'=>'span5','size' =>15)
));
?>--></div>
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
	</div>
</div>
		
	<!--<?php echo $form->textAreaGroup($model,'direccion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>25)))); ?>-->
		<div class="posicion3">
		<?php echo $form->textAreaGroup(
		$model,
		'direccion',
		array(
		'wrapperHtmlOptions' => array(
		//'class' => 'col-sm-5',
		),
		'widgetOptions' => array(
		'htmlOptions' => array('rows' => 4, 'style' => 'width: 680px;'),
		)
		)
		); ?>
		</div>
	<!--
	<?php echo $form->checkBoxGroup($model,'estatus'); ?>

	<?php echo $form->textFieldGroup($model,'perfil',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>20)))); ?>

	<?php echo $form->textFieldGroup($model,'fecha_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'fecha_actualizacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'fk_usuario_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'fk_usuario_actualizacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
	-->
		<br/>
	<div class="captcha">
	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Por favor, introduzca las letras tal como se muestran en la imagen de arriba.
		<br/>Las letras no distinguen entre mayúsculas y minúsculas.
		</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>
	<br/>
<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'success',
			'label'=>$model->isNewRecord ? 'Registrarse' : 'Actualizar',
			'icon'=>'glyphicon glyphicon-ok',
		)); ?>
	
	
</div>
</div>
</div>
<br/>
<?php $this->endWidget(); ?>
