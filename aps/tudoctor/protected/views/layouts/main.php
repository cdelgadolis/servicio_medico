<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="es">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<link href='<?php echo Yii::app()->getBaseUrl().'/images/tudoctor.png'; ?>' rel='shortcut icon' type='image/x-icon'/>
	<link href='<?php echo Yii::app()->getBaseUrl().'/images/tudoctor.png'; ?>' rel='icon' type='image/x-icon'/>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container">

	<div id="header">
		<br>
		<?php echo CHtml::image(Yii::app()->getBaseUrl().'/images/cintillo.jpg', 'Atención Primaria de Salud',
				array('class'=>'img-responsive','height'=>300)) ?>
<?php

if(!Yii::app()->user->isGuest){
    $admin = (isset(Yii::app()->user->perfil) and Yii::app()->user->perfil == 'Admin') ? true : false ;
    $this->widget('booster.widgets.TbNavbar',
    array(
    'type' => '',
   //'brand' => CHtml::encode(Yii::app()->name),
   // 'brand' => 'Inicio',
    'brand'=>CHtml::image(Yii::app()->getBaseUrl().'/images/tudoctor.png', 'logo tu doctor', array('width'=>50,'height'=>50)),
    'brandUrl' => array('/site/casa'),
    'collapse' => true, // requires bootstrap-responsive.css
    'fixed' => false,
    'fluid' => true,
    'items' => array(
    array(
    'class' => 'booster.widgets.TbMenu',
    'type' => 'navbar',
     'items' => array(
    //array('label' => 'Home', 'url' => '#', 'active' => true),
   // array('label' => 'Contacto', 'url' => array('/site/contact')),
   // array('label'=>'Login', 'url'=>array('/site/login')),
    //array('label' => 'Usuarios', 'url' => array('/usuario/admin'),'visible' => $admin),
    //array('label' => 'Materia', 'url' => array('/materia/index'),'visible' => $admin),
    //array('label' => 'Formato de publicacion', 'url' => array('/formatopub/index'),'visible' => $admin),
    //array('label' => 'Tipo de publicacion', 'url' => array('/tipomaterial/index'),'visible' => $admin),

    array(
'label' => 'Solicitud',
'url' => '#',
'items' => array(
array('label' => 'Generar Solicitud', 'url' => array('/paciente/home')),
'---',
//array('label' => 'NAV HEADER'),
array('label' => 'Consultar', 'url' => array('/solicitud/admin'),'visible' => $admin),
)
),

	array(
    'label' => 'Configuración',
    'icon' =>'glyphicon glyphicon-wrench',
    'url' => '#',
    'items' => array(
    array('label' => 'Sedes', 'url' => array('/sede/admin'),'visible' => $admin),
    array('label' => 'Especialidades', 'url' => array('/especialidad/admin'),'visible' => $admin),
    array('label' => 'Médicos', 'url' => array('/medicos/admin'),'visible' => $admin),
    array('label' => 'Horarios', 'url' => array('/medicoHorario/admin'),'visible' => $admin),
    array('label' => 'Días', 'url' => array('/dias/admin'),'visible' => $admin),
    '---',
    array('label' => 'Actividades', 'url' => array('/actividad/admin'),'visible' => $admin),
    //array('label' => 'Estadisticas', 'url' => array('/estadisticas/index'),'visible' => $admin),
    /*array(
    'label' => 'One more separated link',
    'url' => '#'
    ),*/
    ),'visible' => $admin
    ),
   
    array(
    'label' => 'Opciones',
    'icon' =>'glyphicon glyphicon-cog',
    'url' => '#',
    'items' => array(
    array('label' => 'Estado', 'url' => array('/estado/admin'),'visible' => $admin),
    array('label' => 'Municipio', 'url' => array('/municipio/admin'),'visible' => $admin),
    array('label' => 'Parroquia', 'url' => array('/parroquia/admin'),'visible' => $admin),
    array('label' => 'Estado Civil', 'url' => array('/estadoCivil/admin'),'visible' => $admin),
    array('label' => 'Institución', 'url' => array('/institucion/admin'),'visible' => $admin),
    array('label' => 'Parentesco', 'url' => array('/parentesco/admin'),'visible' => $admin),
    array('label' => 'Patologia', 'url' => array('/patologias/admin'),'visible' => $admin),
    array('label' => 'Tipo de Persona', 'url' => array('/tipoPersona/admin'),'visible' => $admin),
    array('label' => 'Tipo de Trabajador', 'url' => array('/tipoTrabajador/admin'),'visible' => $admin),
    '---',
    array('label' => 'Usuarios', 'url' => array('/usuario/admin'),'visible' => $admin),
    array('label' => 'Estadisticas', 'url' => array('/estadisticas/index'),'visible' => $admin),
    /*array(
    'label' => 'One more separated link',
    'url' => '#'
    ),*/
    ),'visible' => $admin
    ),
    array(
    'label' => 'Paciente',
    'icon' =>'glyphicon glyphicon-user',
    'url' => '#',
    'items' => array(
    array('label' => 'Pacientes', 'url' => array('/paciente/admin'),'visible' => $admin),
    array('label' => 'Historia Clinica General', 'url' => array('/historiaClinica/admin'),'visible' => $admin),
    array('label' => 'Historia Clinica Psicologia', 'url' => array('/historiaClinicaPsicologia/admin'),'visible' => $admin),
    array('label' => 'Historia Clinica Psiquiatria', 'url' => array('/historiaClinicaPsiquiatrica/admin'),'visible' => $admin),
    array('label' => 'Evolucion', 'url' => array('/evolucion/admin'),'visible' => $admin),
    '---',
    array('label' => 'Notificacion', 'url' => array('/usuario/admin'),'visible' => $admin),
    /*array(
    'label' => 'One more separated link',
    'url' => '#'
    ),*/
    ),'visible' => $admin
    ),
    
     array('label'=>' Preguntas Frecuentes', 'icon' =>'glyphicon glyphicon-info-sign', 'url'=>array('/site/casa')),
     array('label' => 'Contáctenos', 'icon' =>'glyphicon glyphicon-envelope', 'url' => array('/site/contact')),
    ),
    ),
  //  '<form class="navbar-form navbar-left" action=""><div class="form-group"><input type="text" class="form-control" placeholder="Buscar..."></div></form>',
    array(
    'class' => 'booster.widgets.TbMenu',
    'type' => 'navbar',
    'htmlOptions' => array('class' => 'pull-right'),
    'items' => array(
    //array('label' => 'Link', 'url' => '#','visible' => $admin),
    '---',
    array(
    'label' => Yii::app()->user->name,
    'url' => '#',
    'items' => array(
    array(
    'label' => 'Detalle de Usuario', 'url' =>array('/usuario/view&id='.Yii::app()->user->id.'')),
    array('label' => 'Modificar Datos', 'url' =>array('/usuario/update&id='.Yii::app()->user->id.'')),
    array('label' => 'Modificar Clave', 'url' =>array('/usuario/cambiarClave&id='.Yii::app()->user->id.'')),
    '---',
    array('label' => 'Salir', 'url' => array('/site/logout')),
    ), //'visible'=>Yii::app()->user->isGuest
    ),
    ),
    ),
    ),
    )
    );

	}// Fin if si no es un invitado (no se ha autenticado)
?>
</div><!-- HEADER -->

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer" >
		&copy; <?php echo date('Y'); ?> - Atención Primaria de Salud en línea /
		<?php echo CHtml::link('Ministerio del Poder Popular para la Cultura',
		'http://www.ministeriodelacultura.gob.ve/', array('target'=>'_blank') ); ?> <br/>
    Sistema desarrollado integramente en Software Libre, dando cumplimiento a la
		<?php echo CHtml::link('Ley de Infogobierno', 'http://www.cnti.gob.ve/images/stories/documentos_pdf/leydeinfogob.pdf',
		 array('target'=>'_blank') ); ?>.

		<div class="redes-sociales" >
			<?php echo CHtml::link(CHtml::image(Yii::app()->getBaseUrl().'/images/twitter.png','Twitter Biblioteca Nacional de Venezuela'),
			 'https://twitter.com/biblionacional', array('target'=>'_blank') ) ?>

			<?php echo CHtml::link(CHtml::image(Yii::app()->getBaseUrl().'/images/instagram.png','Instagram Biblioteca Nacional de Venezuela'),
			 'https://www.instagram.com/biblionacional/', array('target'=>'_blank') ) ?>

			<?php echo CHtml::link(CHtml::image(Yii::app()->getBaseUrl().'/images/facebook.png','Facebook Biblioteca Nacional de Venezuela'),
			 'https://www.facebook.com/BIBLIOTECANACIONALDEVENEZUELABNV', array('target'=>'_blank') ) ?>

			<?php echo CHtml::link(CHtml::image(Yii::app()->getBaseUrl().'/images/youtube.png','Youtube Biblioteca Nacional de Venezuela'),
				'https://www.youtube.com/channel/UCZknQGmAwfHJn8DBiiYJIVg', array('target'=>'_blank') ) ?>

			<?php echo CHtml::link(CHtml::image(Yii::app()->getBaseUrl().'/images/soundcloud.png','SoundCloud Biblioteca Nacional de Venezuela'),
				'https://soundcloud.com/biblionacional', array('target'=>'_blank') ) ?>

		</div>

	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
