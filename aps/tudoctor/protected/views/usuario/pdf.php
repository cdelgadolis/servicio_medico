<?php
$pdf=Yii::createComponent('application.extensions.mpdf60.mpdf');
$dataProvider = $_SESSION['datos_usuario']->getData();
$contador =count( $dataProvider );

$fecha=($model->fecha_creacion);
$fecha=Yii::app()->dateFormatter->format("dd/MM/yyyy", strtotime($model->fecha_creacion));

$html.='
<table align="center"><tr>
<td align="center"><b>Sistema Automatizado de Depósito Legal - Registro de Usuarios</b></td>
</tr></table>
Total usuarios registros: '.$contador.'
<table class="detail-view2" repeat_header="1" cellpadding="1" cellspacing="1"
width="100%" border="1">
<tr class="principal">
<td class="principal" width="5%" align="center">&nbsp;ID</td>
<td class="principal" width="8%">&nbsp;RIF</td>
<td class="principal" width="6%">&nbsp;Tipo persona</td>
<td class="principal" width="25%">&nbsp;Nombre / Razón Social</td>
<td class="principal" width="6%" align="center">&nbsp;Estado</td>
<td class="principal" width="10%">&nbsp;Telefono celular</td>
<td class="principal" width="14%">&nbsp;Correo principal</td>
<td class="principal" width="5%">&nbsp;Perfil</td>
<td class="principal" width="9%">&nbsp;Fecha de Registro</td>
</tr>';
$i=0;
$val=count($dataProvider);
while($i<$val){
$html.='
<tr class="odd">
<td align="center">&nbsp;'.$dataProvider[$i]['id_usuario'].'</td>
		<td>&nbsp;'.$dataProvider[$i]['usuario'].'</td>
		<td align="center">&nbsp;'.$dataProvider[$i]['tipo_pers'].'</td>
		<td>&nbsp;'.$dataProvider[$i]['nombre_razon'].'</td>
		<td align="center">&nbsp;'. @$dataProvider[$i]['fkEstado']['nombre'].'</td>
		<td>&nbsp;'.$dataProvider[$i]['telefono_celular'].'</td>
		<td>&nbsp;'.$dataProvider[$i]['correo_ppal'].'</td>
		<td align="center">&nbsp;'.$dataProvider[$i]['perfil'].'</td>
		<td>&nbsp;'.$fecha.'</td>
';
$html.='</tr>'; $i++;
}
$html.='</table>';
$mpdf=new mPDF('win-1252','LETTER-L','','',9,9,24,10,5,5);
$mpdf->WriteHTML($html);
$mpdf->Output('Reporte_registro_usuario:'.date('Y-m-d-H_i_a').'.pdf','D');
exit; ?>
