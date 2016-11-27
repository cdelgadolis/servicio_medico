<?php
$anio=date('Y');

$today=date('Y-m-d');
?>

<?php
$form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'paciente-form',
	'htmlOptions' => array('enctype' => 'multipart/form-data'),	
	'enableAjaxValidation'=>true,
)); 
?>

<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>
<?php 
$baseUrl = Yii::app()->baseUrl;
$numeros = Yii::app()->getClientScript()->registerScriptFile($baseUrl . '/js/jquery.numeric.js');
$numeros = Yii::app()->getClientScript()->registerScriptFile($baseUrl . '/js/validacion.js');
Yii::app()->clientScript->registerScript('camara',"

    $('#Paciente_cedula').focusout(function(){
        var cedula = $('#Paciente_cedula').val();
         $.ajax({
            url: '" . Yii::app()->createUrl('ValidacionJs/Session') . "',
            async: true,
            type: 'POST',
            data: 'cedula=' + cedula ,
            dataType: 'json',
            success: function(data) {

            },
            error: function(data) {
                bootbox.alert('Ok:Ocurrio un error');
            }
        });

    });
");

?>
<script type="text/javascript">

$(document).ready(function(){
        $('#Institucion').hide();
        $('#Titular').hide();
        $("#Paciente_tipo_persona").change(function(){
        if ( ($("#Paciente_tipo_persona").val() == 2) ||  ($("#Paciente_tipo_persona").val() == 3) ) {
		// Muestra el campo de portatil y oculta los campos de escritorio.
            //$('#Serial').show();
                        $('#Institucion').hide();
                        $('#Titular').show(); 
             }
             else{
				 $('#Institucion').show();
                 $('#Titular').hide(); 
				  } 
   });
});

	</script>


<?php echo $form->errorSummary($model); ?>

<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Datos Básicos</h3>
  </div>
    <div class="panel-body">
<div class="row">

<div class='col-xs-6 col-md-4'>
   <?php echo $form->dropDownListGroup(
		$model,
		'tipo_persona',
		array(
		'wrapperHtmlOptions' => array(
		'class' => '',
		),
		'widgetOptions' => array(
		'data' => CHtml::listData(TipoPersona::model()->findAll(array('condition'=>'status=TRUE', 'order'=>'tipo_persona')), 'id_tipo_persona', 'tipo_persona'),
		'htmlOptions' => array('empty' => 'Seleccione...','style' => 'width: 130px; ',),
		)
		)
		); ?> 	
</div>	
	
<div class='col-xs-6 col-md-4'>	
	<?php echo $form->dropDownListGroup(
		$model,
		'nacionalidad',
		array(
		'wrapperHtmlOptions' => array(
		'class' => '',
		),
		'widgetOptions' => array(
		'data' => array('V' => 'V', 'E' => 'E'),
		'htmlOptions' => array('empty' => 'Seleccione...','style' => 'width: 130px; ',),
		)
		)
		); ?> 		
</div>	

<div class='col-xs-6 col-md-4'>
	 <?php echo $form->textFieldGroup($model,'cedula',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ','class'=>'span5','maxlength'=>15, 'onblur' => "buscarPersonaSaime($('#Paciente_nacionalidad').children(':selected').text(),$(this).val())")))); ?>	
</div>
</div>
  
<div class="row">

<div class='col-md-4'>
	<?php echo $form->textFieldGroup($model,'nombre',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 250px; ','class'=>'span5','maxlength'=>70)))); ?>
</div>
<div class='col-md-4'>
	<?php echo $form->textFieldGroup($model,'apellido',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 250px; ','class'=>'span5','maxlength'=>70)))); ?>
</div>

<div class='col-md-4'>
	<?php echo $form->dropDownListGroup(
		$model,
		'sexo',
		array(
		'wrapperHtmlOptions' => array(
		'class' => '',
		),
		'widgetOptions' => array(
		'data' => array('F' => 'F', 'M' => 'M'),
		'htmlOptions' => array('empty' => 'Seleccione...','style' => 'width: 130px; ',),
		)
		)
		); ?>	
</div>

</div>  
  

<div class="row">

<div class='col-xs-6 col-md-4'>
   <?php echo $form->dropDownListGroup($model,'fk_estado', array(
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
	
<div class='col-xs-6 col-md-4'>	
	<?php echo $form->textFieldGroup($model,'lugar_nacimiento',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 250px; ','class'=>'span5','maxlength'=>200)))); ?> 		
</div>	

<div class='col-xs-6 col-md-4'>
	<?php echo $form->datePickerGroup($model,'fecha_nacimiento',array('widgetOptions'=>array('options'=>array('format'=>'yyyy/mm/dd', 'language' => 'es', 'todayBtn'=>'true', 'startDate'=>'1910/01/01', 'endDate'=>'$today'),'htmlOptions'=>array('style' => 'width: 130px;','class'=>'span5' ) ), /*'hint' => 'Haga click en la caja de texto para seleccionar la fecha.',*/
'prepend' => '<i class="glyphicon glyphicon-calendar"></i>')); ?>
</div>
</div>
		  
	<?php //echo $form->textFieldGroup($model,'numero_historia',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ','class'=>'span5','maxlength'=>15)))); ?>

<div class="row">

<div class='col-xs-6 col-md-4'>
   <?php echo $form->dropDownListGroup($model,'estado_civil', array(
		'wrapperHtmlOptions' => array(
		'class' => 'col-sm-5',
		),
		'widgetOptions' => array(
		'data' => CHtml::listData(EstadoCivil::model()->findAll(array('condition'=>'status=TRUE', 'order'=>'edo_civil')), 'id_edo_civil', 'edo_civil'),
		'htmlOptions' => array('empty' => 'Seleccione...', 'style' => 'width: 200px; ',),
		)
		)
		); ?>	
</div>	
	
<div class='col-xs-12 col-md-8'>	
	<?php echo $form->textFieldGroup($model,'direccion',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 650px; ','class'=>'span5','maxlength'=>200)))); ?>
</div>	
</div>	
	
	
<div class="row">

<div class='col-xs-6 col-md-4'>
   	<?php echo $form->textFieldGroup($model,'telefono_celular',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ','class'=>'span5','maxlength'=>15)))); ?>
<!--<?php
$this->widget('CMaskedTextField', array(
'model' => $model,
'attribute' => 'telefono_celular',
'mask' => '(9999)-999-9999',
'htmlOptions' => array('class'=>'span5','size' =>15)
));
?>-->	
</div>	
	
<div class='col-xs-12 col-md-8'>	
	<?php echo $form->textFieldGroup($model,'telefono_fijo',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ','class'=>'span5','maxlength'=>15)))); ?>
<!--<?php
$this->widget('CMaskedTextField', array(
'model' => $model,
'attribute' => 'telefono_fijo',
'mask' => '(9999)-999-9999',
'htmlOptions' => array('class'=>'span5','size' =>15)
));
?>-->
</div>	
</div>

<div class="row">

<div class='col-xs-6 col-md-4'>
   	<?php echo $form->textFieldGroup($model,'correo',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 250px; ','class'=>'span5','maxlength'=>50)))); ?>
</div>	
	
<div class='col-xs-6 col-md-4'>	
	<?php echo $form->textFieldGroup($model,'correo_sec',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 250px; ','class'=>'span5','maxlength'=>50)))); ?>
</div>	

<div class='col-xs-6 col-md-4'>	
	<?php echo $form->fileFieldGroup($model,'foto',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>
</div>
</div>
	
  </div>
</div>


<div id="Institucion" class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-briefcase"></span> Datos Laborales</h3>
  </div>
  <div class="panel-body">
    <?php echo $form->dropDownListGroup($model,'institucion', array(
		'wrapperHtmlOptions' => array(
		'class' => 'col-sm-5',
		),
		'widgetOptions' => array(
		'data' => CHtml::listData(Institucion::model()->findAll(array('condition'=>'status=TRUE', 'order'=>'nombre')), 'id_institucion', 'nombre'),
		'htmlOptions' => array('empty' => 'Seleccione...', 'style' => 'width: 600px; ',),
		)
		)
		); ?>

	<?php echo $form->dropDownListGroup($model,'tipo_trabajador', array(
		'wrapperHtmlOptions' => array(
		'class' => 'col-sm-5',
		),
		'widgetOptions' => array(
		'data' => CHtml::listData(TipoTrabajador::model()->findAll(array('condition'=>'status=TRUE', 'order'=>'tipo_trabajador')), 'id_tipo_trabajador', 'tipo_trabajador'),
		'htmlOptions' => array('empty' => 'Seleccione...', 'style' => 'width: 200px; ',),
		)
		)
		); ?>

	<?php echo $form->textFieldGroup($model,'departamento',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 750px; ','class'=>'span5','maxlength'=>90)))); ?>

	<?php echo $form->textFieldGroup($model,'ocupacion',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 750px; ','class'=>'span5','maxlength'=>90)))); ?>
	
	<?php echo $form->textFieldGroup($model,'telefono_oficina',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ','class'=>'span5','maxlength'=>15)))); ?>
<!--<?php
$this->widget('CMaskedTextField', array(
'model' => $model,
'attribute' => 'telefono_oficina',
'mask' => '(9999)-999-9999',
'htmlOptions' => array('class'=>'span5','size' =>15)
));
?>-->

  </div>
</div>	

<div id="Titular" class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Datos del Titular</h3>
  </div>
  <div class="panel-body">
	  
<div class="row">

<div id="cedula_representante" class='col-md-4'>
   <?php echo $form->textFieldGroup($model,'cedula_representante',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 150px; ','class'=>'span5','maxlength'=>15))
               )); ?>	
</div>	
	
<div class='col-xs-6 col-md-4'>	
	<div id="nombrediv">
	<?php echo $form->textFieldGroup($model,'nombre_representante',array('widgetOptions'=>array('htmlOptions'=>array('readonly'=>'true','style' => 'width: 350px; ','class'=>'span5','maxlength'=>70)))); ?>		
	</div>
</div>	

<div class='col-xs-6 col-md-4'>
	 <?php echo $form->dropDownListGroup($model,'parentesco', array(
		'wrapperHtmlOptions' => array(
		'class' => 'col-sm-5',
		),
		'widgetOptions' => array(
		'data' => CHtml::listData(Parentesco::model()->findAll(array('condition'=>'status=TRUE', 'order'=>'parentesco')), 'id_parentesco', 'parentesco'),
		'htmlOptions' => array('empty' => 'Seleccione...', 'style' => 'width: 200px; ',),
		)
		)
		); ?> 
</div>
</div>	  
	  
  </div>
</div>	
	
<!--
	<?php echo $form->checkBoxGroup($model,'estatus'); ?>

	<?php echo $form->textFieldGroup($model,'fecha_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'fecha_actualizacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'fk_usuario_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'fk_usuario_actualizacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

-->

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'icon' =>'glyphicon glyphicon-user',
			'context'=>'success',
			'label'=>'Guardar Datos',
		)); ?>
</div>

<?php $this->endWidget(); ?>
