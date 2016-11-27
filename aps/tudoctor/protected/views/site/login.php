<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
/* @var $this Controller */

$this->pageTitle=Yii::app()->name . ' - Iniciar Sesión';
?>

<div class="page-header">
  <h1>Tu Doctor - en Línea<small> </small></h1>
</div>

<div class="contenedor" style="widht:100%;">

<div style="">
<div class="list-group">
	<?php echo CHtml::link('<h4 class="list-group-item-heading">
	<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
	Registrarse</h4>',array('paciente/create'), array('class'=>'list-group-item') ) ?>
</div>
<div class="list-group">
	<?php echo CHtml::link('<h4 class="list-group-item-heading">
	<span class="glyphicon glyphicon-file" aria-hidden="true" ></span>
	Guía del Usuario</h4>',Yii::app()->baseUrl.'/images/guia.pdf', array('class'=>'list-group-item','target'=>'_blank') ) ?>
</div>
<div class="list-group">
	<?php echo CHtml::link('<h4 class="list-group-item-heading">
	<span class="glyphicon glyphicon-info-sign" aria-hidden="true" ></span>
	Preguntas Frecuentes</h4>',array('site/casa'), array('class'=>'list-group-item') ) ?>
</div>
<div class="list-group">
	<?php echo CHtml::link('<h4 class="list-group-item-heading">
	<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
	Contáctenos</h4>',array('site/contact'), array('class'=>'list-group-item') ) ?>
</div>

</div>

<div class="form">
<?php /*$form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); */


$form = $this->beginWidget(
'booster.widgets.TbActiveForm',
array(
'id' => 'login-form',
'htmlOptions' => array('class' => 'well'), // for inset effect
)
);


echo $form->textFieldGroup(
	$model, 'username', array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),)
);

echo $form->passwordFieldGroup(
	$model, 'password', array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),)
);

//echo $form->checkboxGroup($model, 'checkbox');
$this->widget(
'booster.widgets.TbButton', array(
'buttonType' => 'submit',
 'size' => 'large',
 'context' => 'info',
'icon' =>'glyphicon glyphicon-user',
//'class'=> 'right',
'label' => 'Entrar' )
 );



 $this->endWidget();
unset($form);
 ?><div align="right">
<button type="button" class="btn btn-sm btn-success" data-toggle="popover" data-placement="left" title="¿Cómo iniciar sesión?" data-content="Ejemplo: RIF V-012345678-9  en el campo de RIF o USUARIO se debe colocar 0123456789 (Sin letras, sin espaciones, ni guiones)."><b>Ayuda</b></button>
</div> <br/>
<?php echo CHtml::link('¿Olvido Contraseña?',array('site/recuperarcontrasena')); ?>
<!--<?php echo CHtml::imageButton(Yii::app()->baseUrl.'/images/registrarse.jpeg' ,array('submit' => array('/usuario/create')));?>-->
</div><!-- form -->

</div> <!-- fin contenedor listas y login -->
