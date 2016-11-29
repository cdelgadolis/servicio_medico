<?php
$this->breadcrumbs=array(
	'Historia Clinica Psiquiatricas'=>array('admin'),
);

$this->menu=array(
array('label'=>'List HistoriaClinicaPsiquiatrica','url'=>array('index')),
array('label'=>'Create HistoriaClinicaPsiquiatrica','url'=>array('create')),
array('label'=>'Update HistoriaClinicaPsiquiatrica','url'=>array('update','id'=>$model->id_hc_psiquiatrica)),
array('label'=>'Delete HistoriaClinicaPsiquiatrica','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_hc_psiquiatrica),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage HistoriaClinicaPsiquiatrica','url'=>array('admin')),
);
?>

<h1 class="titulo">Detalle Historia Clinica Psiquiatrica
<br>Paciente: <?php echo $model->paciente0->nombre." ". $model->paciente0->apellido; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'type' => 'striped bordered condensed',
'attributes'=>array(
		'id_hc_psiquiatrica',
		'paciente'=> array(
			'label' => 'Paciente',
			'name' => 'paciente',
			'value' => $model->paciente0->nombre." ". $model->paciente0->apellido,
			),
		array(
			'label'=>'Fecha de Ingreso',
			'name'=>'fecha_ingreso',
			'value' => Yii::app()->dateFormatter->format("dd/MM/yyyy", strtotime($model->fecha_ingreso)),
		),
		'hora',
		'nombre_padre',
		'nombre_madre',
		'nombre_conyugue',
		'referido',
		'motivo_consulta',
		'enfermedad_actual',
		'antecedentes_familiares',
		'padre',
		'madre',
		'hermanos',
		'otros',
		'antecedentes_personales',
		'tabaco',
		'alcohol',
		'drogas',
		'otros_hp',
		'examen_fisico',
		'tension_alta',
		'frecuencia_cardiaca',
		'frecuencia_respiratoria',
		'talla',
		'peso',
		'pulso',
		'examen_mental',
		'impresion_diagnostica',
		'plan_tratamiento',
		'observacion',
		'comentarios',
		'estatus' => array(
			'label' => 'Estatus de la Historia',
			'value' => $model->estatus == 1 ? 'Activo':'Inactivo',
			),
		array(
			'label'=>'Fecha Creación',
			'name'=>'fecha_creacion',
			'value' => Yii::app()->dateFormatter->format("dd/MM/yyyy", strtotime($model->fecha_creacion)),
		),
		array(
			'label'=>'Usuario Creación',
			'name'=>'fk_usuario_creacion',
			'value' => $model->fkUsuarioCreacion->id_usuario." - ". $model->fkUsuarioCreacion->nombre,
			),
		array(
			'label'=>'Fecha Actualización',
			'type'=>'raw',
			'name'=>'fecha_actualizacion',
			'value' =>$model->fecha_actualizacion == NULL  ? '<i>No asignado</i>' : Yii::app()->dateFormatter->format("dd/MM/yyyy", strtotime($model->fecha_actualizacion)),
		),
		array(
			'label'=>'Usuario Actualización',
			'type'=>'raw',
			'name'=>'fk_usuario_actualizacion',
			'value' =>$model->fkUsuarioActualizacion == NULL  ? '<i>No asignado</i>' : $model->fkUsuarioActualizacion->id_usuario." - ". $model->fkUsuarioActualizacion->nombre,
			),
),
)); ?>
