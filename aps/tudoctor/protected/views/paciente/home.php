<?php
/* @var $this SiteController */

//$this->pageTitle=Yii::app()->name;
$this->pageTitle=Yii::app()->name . ' - Inicio';
$this->breadcrumbs=array(
	'Inicio',
);
?>
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

<h1 class="titulo">Atención Primaria de Salud <small class="titulo">- APS</small> </h1>
<br>
<div class="row">
	
	<div class="col-md-4" align="center">
		<?php echo CHtml::image(Yii::app()->getBaseUrl().'/images/Serviciomedico.png', 'Inicio',
				array('class'=>'img-responsive')) ?></div>
	<div class="col-md-8">
		<?php
        $user = Yii::app()->getComponent('user');


        $user->setFlash(
                'info', '<center><strong><b><h3>Centro de citas en línea</h3></b></strong></center> 
                    <p style="text-align: justify">
                    <br>
                         Bienvenido al centro de citas en línea. Por favor ingrese el número de cédula del titular o beneficiario, en caso de no estár registrado, usted será redireccionado(a) a uno de nuestros formularios donde podrá registrar su información.
                         <br><br>En caso de ser la cita para un menor de edad ingrese la cédula del titular.
						 <br><div align="right"><a href="http://localhost/tudoctor/index.php?r=site/index" class="btn btn-success glyphicon glyphicon-new-window" role="button"><b>  ¡Ayuda! </b></a> </div>
                    </p>'
        );
        $type = 'info';

        $this->widget('booster.widgets.TbAlert', array(
            'fade' => false,
            'closeText' => '&times;', // false equals no close link
            'events' => array(),
            'htmlOptions' => array(),
            'userComponentId' => 'user',
            'alerts' => array(// configurations per alert type
                $type => array('closeText' => false),
            ),
        ));
        ?>
<div class="row">
  <div class="col-sm-5 col-md-6"><?php echo $form->textFieldGroup($model,'cedula',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'','maxlength'=>10, 'style' => 'width: 130px; ')))); ?> <?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>'Buscar',
			'icon' =>'glyphicon glyphicon-search',
		)); ?></div></div>
</div>

       
</div>

  <?php $this->endWidget(); ?>
</div>
