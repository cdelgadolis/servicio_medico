<?php
/* @var $this SiteController */

//$this->pageTitle=Yii::app()->name;
$this->pageTitle=Yii::app()->name . ' - Info';
$this->breadcrumbs=array(
	'Info',
);
?>
<!--<h1>Bienvenido al Sistema de <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<div align="center">
<IMG SRC="images/deposito.jpg"  ALT="Sistema de Deposito Legal">
</div>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
-->

<div class="alert alert-success" role="alert">¡Usuario registrado satisfactoriamente!<br><br>
<?php $this->widget(
'booster.widgets.TbButton', array(
'buttonType' => 'link',
'size' => 'large',
'icon' =>'glyphicon glyphicon-download-alt',
'context' => 'success',
//'htmlOptions' => array('target'=>'_blank'),
'url'=> Yii::app()->baseUrl.'/site/login',
//Yii::app()->createUrl('images/form.pdf'),
// 'url' => '#',
'label' => 'Iniciar sesión' )
 );
?>
<br>
</div>
