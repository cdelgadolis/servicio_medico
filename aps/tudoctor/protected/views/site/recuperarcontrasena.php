<?php
$this->pageTitle=Yii::app()->name . ' - Recuperar Contraseña';

$this->breadcrumbs=array('Recuperar Contraseña' );

?>

<h1 class="titulo2">Recuperar Contraseña</h1>

<p class="help-block">Los campos con <span class="required">*</span> son obligatorios.</p><br>

<?php echo $msg; ?>

<div class="form">

<?php $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
            'id' => 'chnage-rpassword-form',
            'enableClientValidation' => true,
            'htmlOptions' => array('class' => 'well'),
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
     ));
?>

  <div class="row"> <?php echo $form->textFieldGroup($model,'usuario',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'','maxlength'=>10, 'style' => 'width: 130px; ')))); ?> </div>

  <div class="row"> <?php echo $form->textFieldGroup($model,'correo_ppal',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50,'style' => 'width: 300px; ')))); ?> </div>

  <div class="row"> <?php echo $form->textFieldGroup($model,'telefono_celular',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ')))); ?>
	<!--<?php
$this->widget('CMaskedTextField', array(
'model' => $model,
'attribute' => 'telefono_celular',
'mask' => '(9999)-999-9999',
'htmlOptions' => array('class'=>'span5','size' =>15)
));
?>-->	 </div>

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
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<div align="left">
<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'warning',
			'label'=>'Recuperar contraseña',
			'icon' =>'glyphicon glyphicon-refresh',
		)); ?>
	</div>
</div>
  <?php $this->endWidget(); ?>
</div>
