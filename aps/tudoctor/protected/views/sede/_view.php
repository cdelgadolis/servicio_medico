<div class = "row">
   
   <div class = "col-xs-6">
      <div class = "thumbnail">
		<img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/' . $data->foto_sede ?>" alt="" width="304" height="200">
      </div>
      
      <div class = "caption">
         <h4 align="center"><b><?= strtoupper($data->sede) ?></b></h4>
         <p></p>
         
         <p align="center">
            <a href="<?php echo Yii::app()->createUrl('paciente/create/', array('id' => $data->id_sede)); ?>" class="btn btn-primary btn-mini" role="button"><b>Generar Cita</b></a>
            
            <button type="button" class="btn btn-info btn-mini" data-toggle="modal" data-target="#my<?= $data->id_sede ?>">Ver más</button>
            <!-- Modal -->
<div class="modal fade" id="my<?= $data->id_sede ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><b>Servicios que presta <?= strtoupper($data->sede) ?></b></h4>
      </div>
      <div class="modal-body">
		  <div>
          <ul>
	  <?php
	 $consulta = "SELECT * FROM especialidad where sede='".$data->id_sede."' ";
	
	 $resultado = Yii::app()->db->createCommand($consulta);
	 $filas = $resultado->query();
	 foreach($filas as $fila):
     ?>
     <li class="text-left"><?= $fila["descripcion"] ?>.</li>
     <?php
     endforeach;
     ?>	
           </ul>
           </div>  
	  <div align="left"><h4><b>Estado</b></h4></div>
        <div class="text-justify"><?= strtoupper($data->estado0->nombre) ?></div>
        <div align="left"><h4><b>Dirección</b></h4></div>
        <div class="text-justify"><?= strtoupper($data->direccion) ?></div>
        <div align="left"><h4><b>Teléfonos</b></h4></div>
        <div class="text-justify"><?= strtoupper($data->telefono_1) ?> - <?= strtoupper($data->telefono_2) ?></div>
        <div align="left"><h4><b>Responsable</b></h4></div>
        <div class="text-justify"><?= strtoupper($data->nombre_responsable) ?></div>
        <div><h4><b>Horario de Atención</b></h4></div>
        <div class="text-justify">Puede visitar nuestras instalaciones en un horario comprendido:<br>Lunes a Viernes de <b><?= $data->horario_entrada; ?> -- <?= $data->horario_salida ?></b></div>
      </div>
      <div class="modal-footer">
		<?php
		if($data->id_sede==1)
		{
		$this->widget(
		'booster.widgets.TbButton', array(
		'buttonType' => 'link', 
		'size' => 'default',
		'icon' =>'glyphicon glyphicon-picture',
		'context' => 'warning',
		'url'=>Yii::app()->createUrl('sede/sm_pedrotorres'),
		'htmlOptions' => array('target'=>'_blank'),
		// 'url' => '#',
		'label' => '  Ver Galería de Imágenes' )
		);
	}

		if($data->id_sede==2)
		{
		$this->widget(
		'booster.widgets.TbButton', array(
		'buttonType' => 'link', 
		'size' => 'default',
		'icon' =>'glyphicon glyphicon-picture',
		'context' => 'warning',
		'url'=>Yii::app()->createUrl('sede/simon_bolivar'),
		'htmlOptions' => array('target'=>'_blank'),
		// 'url' => '#',
		'label' => '  Ver Galería de Imágenes' )
		);
	}
	if($data->id_sede==3)
		{
		$this->widget(
		'booster.widgets.TbButton', array(
		'buttonType' => 'link', 
		'size' => 'default',
		'icon' =>'glyphicon glyphicon-picture',
		'context' => 'warning',
		'url'=>Yii::app()->createUrl('sede/casa_artista'),
		'htmlOptions' => array('target'=>'_blank'),
		// 'url' => '#',
		'label' => '  Ver Galería de Imágenes' )
		);
	}
	if($data->id_sede==4)
		{
		$this->widget(
		'booster.widgets.TbButton', array(
		'buttonType' => 'link', 
		'size' => 'default',
		'icon' =>'glyphicon glyphicon-picture',
		'context' => 'warning',
		'url'=>Yii::app()->createUrl('sede/ft_teresacarreno'),
		'htmlOptions' => array('target'=>'_blank'),
		// 'url' => '#',
		'label' => '  Ver Galería de Imágenes' )
		);
	}
		?>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

         </p><br>
         
      </div>
   </div>
