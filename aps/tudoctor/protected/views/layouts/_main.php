<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
<?php
		    $this->widget('booster.widgets.TbNavbar',
    array(
    'type' => 'inverse',
    'brand' => CHtml::encode(Yii::app()->name),
    'brandUrl' => '#',
    'collapse' => true, // requires bootstrap-responsive.css
    'fixed' => false,
    'fluid' => true,
    'items' => array(
    array(
    'class' => 'booster.widgets.TbMenu',
    'type' => 'navbar',
    'items' => array(
    array('label' => 'Home', 'url' => '#', 'active' => true),
    array('label' => 'Obras', 'url' => array('/obra/admin')),
    array('label' => 'Usuarios', 'url' => array('/usuario/admin')),
    array(
    'label' => 'Dropdown',
    'url' => '#',
    'items' => array(
    array('label' => 'Action', 'url' => '#'),
    array('label' => 'Another action', 'url' => '#'),
    array(
    'label' => 'Something else here',
    'url' => '#'
    ),
    '---',
    array('label' => 'NAV HEADER'),
    array('label' => 'Separated link', 'url' => '#'),
    array(
    'label' => 'One more separated link',
    'url' => '#'
    ),
    )
    ),
    ),
    ),
    '<form class="navbar-form navbar-left" action=""><div class="form-group"><input type="text" class="form-control" placeholder="Search"></div></form>',
    array(
    'class' => 'booster.widgets.TbMenu',
    'type' => 'navbar',
    'htmlOptions' => array('class' => 'pull-right'),
    'items' => array(
    array('label' => 'Link', 'url' => '#'),
    '---',
    array(
    'label' => Yii::app()->user->name,
    'url' => '#',
    'items' => array(
    array('label' => 'Action', 'url' => '#'),
    array('label' => 'Another action', 'url' => '#'),
    array(
    'label' => 'Something else here',
    'url' => '#'
    ),
    '---',
    array('label' => 'Salir', 'url' => array('/site/logout')),
    )
    ),
    ),
    ),
    ),
    )
    );
		
		?>
		
	</div><!-- header -->

<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="grabado_ok">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>

	<div id="mainmenu">
		<?php /*$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
				array('label'=>'Usuarios', 'url'=>array('/usuario/admin')),
				array('label'=>'Materia', 'url'=>array('/materia/admin')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); */
		?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
