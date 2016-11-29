<?php
$this->pageTitle=Yii::app()->name . ' - Crear Historia Clinica';

$this->breadcrumbs=array('Crear Historia Clinica' );

?>

<h1 class="titulo">Crear Historia Clinica</h1>

<p class="help-block">Los campos con <span class="required">*</span> son obligatorios.</p><br>
<br>
<br>
<div class="izquierda2">
	<?php $this->beginWidget(
			'booster.widgets.TbModal',
			array('id' => 'myModaal')
	); ?>

			<div class="modal-header">
					<a class="close" data-dismiss="modal">&times;</a>
					<h4>Ayuda!</h4>
			</div>

			<div class="modal-body">
					<p class="textooo">
						Por favor ingrese el número de cédula de identidad para buscar los Datos Básicos del Paciente.
					</p>
			</div>

			<div class="modal-footer">

					<?php $this->widget(
							'booster.widgets.TbButton',
							array(
									'label' => 'Cerrar',
									'url' => '#',
									'htmlOptions' => array('data-dismiss' => 'modal'),
							)
					); ?>
			</div>

	<?php $this->endWidget(); ?>
	<?php $this->widget(
			'booster.widgets.TbButton',
			array(
					'label' => '',
					'context' => 'success',
					'icon'=> 'glyphicon glyphicon-question-sign',
					'htmlOptions' => array(
							'data-toggle' => 'modal',
							'data-target' => '#myModaal',
					),
			)
	);
	?>
	</div>
<br>

<div class="form">

<?php $msg; ?>

<?php $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
            'id' => 'chnage-rpassword-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
     ));
?>
	<div class="col-sm-5 col-md-6"><?php echo $form->textFieldGroup($model,'cedula',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'','maxlength'=>10, 'style' => 'width: 130px; ')))); ?> 
    <br>
    <?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>'Buscar',
			'icon' =>'glyphicon glyphicon-search',
		)); ?><br><br><br><br></div>

  <?php $this->endWidget(); ?>
  
 
</div>
