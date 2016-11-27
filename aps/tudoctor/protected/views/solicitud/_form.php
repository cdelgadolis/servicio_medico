<?php
$anio=date('Y');

$today=date('Y-m-d');

$form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'solicitud-form',
	'enableAjaxValidation'=>true,
)); ?>

<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title"><b>Datos del Paciente</b></h3>
  </div>
  <div class="panel-body">
	 <?php if( $paciente->foto ){ ?>
          <div class="media">
            <div class="media-left" style="float:left;">
                <img class="media-object" src="images/pacientes/<?php echo $paciente->foto; ?> " width="196px" alt="Foto <?php echo $paciente->nombre." ".$paciente->apellido; ?>">
            </div>
      <?php } ?>
	 <div class="paciente">
     <b>Paciente</b>: <?php echo $paciente->nombre." ".$paciente->apellido; ?><br>
     <b>C.I</b>: <?php echo $paciente->cedula; ?><br>
     <b>N° Historia Clinica:</b> <?php echo $paciente->numero_historia; ?> <br/>
      <b>Institución:</b> <?php echo $paciente->institucion0->nombre." / ".$paciente->departamento; ?> <br/>
      </div>
      
          </div>
  </div>
</div>

<!--
	<?php echo $form->textFieldGroup($model,'fk_paciente',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
-->

	<div class="panel panel-success">
    <div class="panel-body">
	 <div class="row">
  <div class="col-md-6"><?php echo $form->dropDownListGroup($model,'fk_sede',array(
		'widgetOptions' => array(
		'data' => CHtml::listData(Sede::model()->findAll(array('order'=>'sede')), 'id_sede', 'sede'),
		'htmlOptions' => array(
			'empty' => 'Seleccione...', 
			'style' => 'width: 400px; ',
			'ajax' => array(
				'type'=>'POST', 
				'url'=>Yii::app()->createUrl('solicitud/cargarEspecialidadPorSede'), 
				'update'=>'#Solicitud_fk_especialidad', 
				'data'=>array('sede'=>'js:this.value'),
		  )	),
		) ) ); ?>
		</div>
  <div class="col-md-6"><?php echo $form->dropDownListGroup($model,'fk_especialidad', array(
		'wrapperHtmlOptions' => array(
		'class' => 'col-sm-5',
		),
		'widgetOptions' => array(
		//'data' => CHtml::listData(Especialidad::model()->findAll(array('order'=>'descripcion')), 'id_especialidad', 'descripcion'),
		'htmlOptions' => array(
			'empty' => 'Seleccione...', 
			'style' => 'width: 400px; ',
			'ajax' => array(
				'type'=>'POST', 
				'url'=>Yii::app()->createUrl('solicitud/cargarEspecialidadPorMedico'), 
				'update'=>'#Solicitud_fk_medico', 
				'data'=>array('especialidad'=>'js:this.value'),
		  )	),
		) ) ); ?>
	</div>
</div>
	 
	 <div class="row">
  <div class="col-md-6"><?php echo $form->dropDownListGroup($model,'fk_medico', array(
		'wrapperHtmlOptions' => array(
		'class' => 'col-sm-5',
		),
		'widgetOptions' => array(
		//'data' => CHtml::listData(Especialidad::model()->findAll(array('order'=>'descripcion')), 'id_especialidad', 'descripcion'),
		'htmlOptions' => array('empty' => 'Seleccione...', 'style' => 'width: 400px; ',),
		)
		)
		); ?>
		</div>
  <div class="col-md-6">
	
	<?php
	
	Yii::app()->clientScript->registerCoreScript('jquery');
	Yii::app()->clientScript->registerCoreScript('jquery.ui');
	Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl .'/js/jquery.ui.datepicker.js'); 
	
	 echo $form->datePickerGroup($model,'fecha_solicitud',array(
	'widgetOptions'=>array(
		'options'=>array(
			'format'   => 'yyyy/mm/dd', 
			'language' => 'es', 
			'todayBtn' => 'true', 
			'startDate'=> '$today', 
			'endDate'  => '$anio/12/31',
		
			//'daysOfWeekDisabled' => '0,6',
		
		    //'beforeShowDay'=>'js:editDays',
		    
			'beforeShowDay'=>'js:function(date){
                               var array = '.$fechasagotadas.';
                               var string = jQuery.datepicker.formatDate("yy-mm-dd", date);

                               if (array.indexOf(string) == -1){
									return [false,"", "No event"];
                               }else{ 
									//alert(string);  
									return false; 
								}
                               
                               }',
			),
			
			'htmlOptions'=>array('style' => 'width: 200px;' ) ), /*'hint' => 'Haga click en la caja de texto para seleccionar la fecha.',*/
'prepend' => '<i class="glyphicon glyphicon-calendar"></i>')); ?>

</div>
</div>
	 
	 <div class="row">
  <div class="col-xs-6 col-md-4"><?php echo $form->labelEx($model, 'hora'); ?>
            <?php
            $this->widget(
                    'booster.widgets.TbTimePicker', array(
                'model' => $model,
                'id' => CHtml::activeId($model, 'hora'),
                'attribute' => 'hora',
                'options' => array(
                    'showMeridian' => true,
                    'minuteStep' => 60,
                ),
                'wrapperHtmlOptions' => array(
                    'class' => 'col-md-3',
                ),
                )
         );
?>
<br>
</div>
  <div class="col-xs-6 col-md-4"><?php echo $form->textFieldGroup($model,'motivo_consulta',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 300px; ','class'=>'span5','maxlength'=>300)))); ?>
  </div>
  <div class="col-xs-6 col-md-4"><?php echo $form->textFieldGroup($model,'medico_referido',array('widgetOptions'=>array('htmlOptions'=>array('style' => 'width: 300px; ','class'=>'span5','maxlength'=>200)))); ?>
  </div>
</div>

	      
          </div>
  </div>


<!--
	<?php echo $form->checkBoxGroup($model,'es_activo'); ?>

	<?php echo $form->datePickerGroup($model,'fecha_creacion',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

	<?php echo $form->textFieldGroup($model,'usuario_creacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

-->

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'icon' =>'glyphicon glyphicon-ok',
			'context'=>'success',
			'label'=>'Solicitar Cita',
		)); ?>
</div>
<br>
<div class="izquierda2">
<?php
$this->widget(
		'booster.widgets.TbButton', array(
		'buttonType' => 'link', 
		'size' => 'btn-lg',
		'icon' =>'glyphicon glyphicon-chevron-left',
		'context' => 'danger',
		'url'=>Yii::app()->createUrl('paciente/home'),
		'label' => '  Regresar' )
		);
?>
</div>
<?php $this->endWidget(); ?>
