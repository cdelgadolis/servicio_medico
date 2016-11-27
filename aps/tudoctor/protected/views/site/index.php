
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Ayuda!';
$this->breadcrumbs=array(
	'Ayuda'=>array('index'),
);
?>
<!--
<h1>Bienvenido al Sistema de <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>
-->
<div align="center">
<h1 class="titulo">Centros de Atención Primaria de Salud - Ayuda </h1>
</div>
<br>
<section class="row" >
    <div class="col-lg-4 col-md-35">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-home" style=" font-size: 25px;"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div><?php echo CHtml::link('Sedes',
					array('sede/index')); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-35">
        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-bullhorn" style=" font-size: 25px;"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php //echo $count_unidades_habitacionales; ?></div>
                        <div><?php echo CHtml::link('Jornadas de Salud',
					array('actividad/index')); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-35">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-file" style=" font-size: 25px;"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div><?php echo CHtml::link('Guía del Usuario',
					array('site/index')); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="row">
    <div class="col-lg-6 col-md-40">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-star" style=" font-size: 25px;"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div><?php echo CHtml::link('Contáctenos',
                        	     array('site/contact')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="col-lg-6 col-md-40">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-info-sign" style=" font-size: 25px;"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div><?php echo CHtml::link('Preguntas Frecuentes',
                        	     array('site/casa')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="col-lg-6 col-md-40">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-file" style=" font-size: 25px;"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div><?php echo CHtml::link('Guía del Usuario',
                        	     array('site/index')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
-->
