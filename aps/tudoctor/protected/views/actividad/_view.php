<div class = "row">
   
   <div class = "col-xs-6 col-md-4">
      <div class = "thumbnail">
		 <img src="<?= Yii::app()->getBaseUrl().'/images/actividad.png'; ?>" alt="">
      </div>
      
      <div class = "caption">
         <h5 align="center"><b><?= strtoupper($data->actividad) ?></b></h5>
         <p></p>
         
         <p align="center">
            <a href="<?php echo Yii::app()->createUrl('actividad/view/', array('id'=>$data->id_actividad)); ?>" class="btn btn-primary btn-mini" role="button"><b>Detalle</b></a>
            
            <button type="button" class="btn btn-info btn-mini" data-toggle="modal" data-target="#my<?= $data->id_actividad ?>">Ver más</button>
            <!-- Modal -->
<div class="modal fade" id="my<?= $data->id_actividad ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="modal-title" id="myModalLabel"><b><?= strtoupper($data->actividad) ?></b></h5>
      </div>
      <div class="modal-body">
		  <div>
          <ul>
	  <?php
	 $consulta = "SELECT * FROM actividad where id_actividad='".$data->id_actividad."' ";
	
	 $resultado = Yii::app()->db->createCommand($consulta);
	 $filas = $resultado->query();
	 foreach($filas as $fila):
     ?>
     <li class="text-left"><?= $fila["descripcion"] ?></li>
     <?php
     endforeach;
     ?>	
           </ul>
           </div>
           <br>  
		<div align="left"><h5><b>Fecha:</b> <?= strtoupper($data->fecha_entrada) ?></h5></div>
		<div align="left"><h5><b>Lugar:</b> <?= strtoupper($data->lugar) ?></h5></div>
		<div align="left"><h5><b>Sede:</b> <?= strtoupper($data->fkSede->sede) ?></h5></div>
        <div align="left"><h5><b>Responsable:</b> <?= strtoupper($data->responsable) ?></h5></div>
        <div align="left"><h5><b>Hora Inicio</b></h5></div>
        <div class="text-justify"><?= strtoupper($data->hora_entrada) ?></div>
        <div align="left"><h5><b>Hora Final</b></h5></div>
        <div class="text-justify"><?= strtoupper($data->hora_salida) ?></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

         </p><br>
         
      </div>
   </div>
