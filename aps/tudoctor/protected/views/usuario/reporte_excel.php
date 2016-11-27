<?php
$dataProvider = $_SESSION['datos_usuario']->getData();
$contador =count( $dataProvider );
$html="";
$html.='
<table>
<tr>
<td colspan="13" align="center">Sistema Automatizado de Depósito Legal - Registro de Usuarios</td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td>Total usuarios registros: '.$contador.'</td>
</tr>
<tr>
<td></td>
</tr>
<tr align="center">
<td>&nbsp;<b>ID</b></td>
<td>&nbsp;<b>RIF</b></td>
<td>&nbsp;<b>Tipo persona</b></td>
<td width="500">&nbsp;<b>Nombre / Razón Social</b></td>
<td>&nbsp;<b>Estado</b></td>
<td>&nbsp;<b>Dirección</b></td>
<td>&nbsp;<b>Telefono fijo</b></td>
<td>&nbsp;<b>Telefono celular</b></td>
<td>&nbsp;<b>fax</b></td>
<td>&nbsp;<b>Correo principal</b></td>
<td>&nbsp;<b>Correo alternativo</b></td>
<td>&nbsp;<b>Perfil</b></td>
<td>&nbsp;<b>Fecha de Registro</b></td>
</tr>';
$i=0;
$val=count($dataProvider);
while( $i < $val ){
	$html.='<tr>
		<td align="center">&nbsp;'.$dataProvider[$i]['id_usuario'].'</td>
		<td>&nbsp;'.$dataProvider[$i]['usuario'].'</td>
		<td>&nbsp;'.$dataProvider[$i]['tipo_pers'].'</td>
		<td>&nbsp;'.$dataProvider[$i]['nombre_razon'].'</td>
		<td>&nbsp;'. @$dataProvider[$i]['fkEstado']['nombre'].'</td>
		<td>&nbsp;'. @$dataProvider[$i]['direccion'].'</td>
		<td>&nbsp;'.$dataProvider[$i]['telefono_fijo'].'</td>
		<td>&nbsp;'.$dataProvider[$i]['telefono_celular'].'</td>
		<td>&nbsp;'.$dataProvider[$i]['fax'].'</td>
		<td>&nbsp;'.$dataProvider[$i]['correo_ppal'].'</td>
		<td>&nbsp;'.$dataProvider[$i]['correo_sec'].'</td>
		<td>&nbsp;'.$dataProvider[$i]['perfil'].'</td>
		<td>&nbsp;'.$dataProvider[$i]['fecha_creacion'].'</td>
		';
	$html.='</tr>'; $i++;
}
$html.='</table>';
echo utf8_decode($html); ?>
