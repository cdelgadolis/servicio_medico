<?php
$this->breadcrumbs=array(
	'Sedes'=>array('admin'),
);

?>

<h1 class="titulo">Detalle Sede N° <?php echo $model->id_sede; ?></h1>
<div align="right">
<div class="span4">
        <?php
        echo CHtml::image(Yii::app()->request->baseUrl . '/images/sedes/' . $model->foto_sede, $model->foto_sede, array("width" => "250px", "height" => "250px"));
        ?>
    </div>
</div>
<br>
<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'type' => 'striped bordered condensed',
'attributes'=>array(
		'id_sede',
		'sede',
		'estado'=> array(
			'label' => 'Estado',
			'name' => 'estado',
			'value' => $model->estado0->nombre,
			),
		'direccion',
		'telefono_1',
		'telefono_2',
		'telefono_3',
		'horario_entrada',
		'horario_salida',
		'correo_sede',
		'foto_sede',
		'cedula_responsable',
		'nombre_responsable',
		'contacto',
		'es_activo' => array(
			'label' => 'Estatus de la Sede',
			'value' => $model->es_activo == 1 ? 'Activo':'Inactivo',
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
