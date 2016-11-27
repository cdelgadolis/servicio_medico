<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contáctenos';
$this->breadcrumbs=array(
	'Ayuda'=>array('index'),
	'Contacto',
);
?>

<h1>Contáctenos</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>
<br/>
<div class="contacto">

	Tenemos a tu disposición los siguientes puntos de contacto:
</div>
<p><br/>

<span class="glyphicon glyphicon-phone-alt"></span> (0212)505.93.44 / (0212)505.93.45<br/><br/>
<span class="glyphicon glyphicon-envelope"></span> <span class="texto">&nbsp;&nbsp;<a href="mailto:servicio.medico@bnv.gob.ve">servicio.medico@bnv.gob.ve</a></span><br/><br/>
 <span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp; Ubicación:
 <div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.8592786215117!2d-66.91443068498774!3d10.511747992501473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5ecedee85c89%3A0x8e231d121bdf6d9d!2sBiblioteca+Nacional!5e0!3m2!1ses-419!2s!4v1444942339987" width="500" height="250" frameborder="0" style="border:0" allowfullscreen></iframe></div>
</p>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<br/>
	<div class="contacto">También puedes enviarnos tu inquietudes por esta vía:</div>
	<br/>
	<p class="note">Campos requeridos <span class="required">*</span></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Por favor, introduzca las letras tal como se muestran en la imagen de arriba.
		<br/>Las letras no distinguen entre mayúsculas y minúsculas.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<!--<?php echo CHtml::submitButton('Submit'); ?>-->
		<?php $this->widget(
		'booster.widgets.TbButton',
		array('buttonType' => 'submit', 'icon' =>'glyphicon glyphicon-send', 'context'=>'primary', 'label' => ' Enviar')
		);?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<div class="izquierda2">
<?php
$this->widget(
		'booster.widgets.TbButton', array(
		'buttonType' => 'link', 
		'size' => 'btn-lg',
		'icon' =>'glyphicon glyphicon-chevron-left',
		'context' => 'danger',
		'url'=>Yii::app()->createUrl('site/index'),
		'label' => '  Regresar' )
		);
?>
</div>
<?php endif; ?>
