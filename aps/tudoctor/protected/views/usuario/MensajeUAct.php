<?php
//Correo
$mensaje = '<HTML>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <head>
       <title>Citas En Linea - Servicio Médico Lic. Pedro Torres</title>
    </head>
    <body style="font:0px Arial;color:#ffffff;">
        <table align=center width=800 style="font:14px Arial;color:#000000;">
       
        <tr><td><b>'.$model->nombre_razon.'</b>, reciba un cordial saludo.</td></tr>
        
        <tr><td><b><br>El Instituto Autónomo Biblioteca Nacional y Servicios de Bibliotecas</b> le informa que hemos procesado la Actualización de Datos del Usuario exitosamente, a continuación le indicamos los detalles:<br></td></tr>

        <tr><td><b><h3>-- Datos de Usuario --</h3></b></td></tr>
        <tr><td><b>USUARIO: </b> '.$model->usuario.'</td></tr>
        <tr><td><b>CLAVE: </b> '.$clave2.'</td></tr>
        <br>
        <tr><td><b><h3>-- Datos de Ubicación --</h3></b></td></tr>
        <tr><td><b>ESTADO: </b> '.$model->fk_estado.'</td></tr>
        <tr><td><b>DIRECCIÓN: </b> '.$model->direccion.'</td></tr>
        <tr><td><b>TELÉFONO FIJO: </b> '.$model->telefono_fijo.'</td></tr>
        <tr><td><b>CELULAR: </b> '.$model->telefono_celular.'</td></tr>
        
        <tr><td><b>CORREO PRINCIPAL: </b> '.$model->correo_ppal.'</td></tr>
        <tr><td><b>CORREO ALTERNATIVO: </b> '.$model->correo_sec.'</td></tr>
        <tr><td style="font:12px Arial;color:#383838;"><br><br>Este es un mensaje automático. No responda al remitente. Si desea comunicarse con nosotros puede contactarnos a través de los números telefónicos (0212)505.91.75 / (0212)505.91.76 / (0212)505.91.77, o a través del correo electrónico deposito.legalvenezuela@bnv.gob.ve</td></tr>
        </table>
    </body>
</HTML>'; 
$mail = new YiiMailer();
$mail->setFrom("No-responder@bnv.gob.ve", "Depósito Legal");
$mail->setTo($model->correo_ppal);
$mail->AddCC($model->correo_sec);
$mail->Subject="Actualización de Usuario";
$mail->MsgHTML($mensaje);

if ($mail->send()) {
			    Yii::app()->user->setFlash('login','Registro de Usuario exitoso.');
			} else {
			    Yii::app()->user->setFlash('error','Error al enviar el correo electrónico: '.$mail->getError());
			}
//
?>