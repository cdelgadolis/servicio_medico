<?php
/* @var $this SiteController */

//$this->pageTitle=Yii::app()->name;
$this->pageTitle=Yii::app()->name . ' - Teatro Teresa Carreño';
$this->breadcrumbs=array(
	'Sede'=>array('index'), 'Teatro Teresa Carreño',
);
?>
<div class="form">

<?php $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
            'id' => 'chnage-rpassword-form',
            'enableClientValidation' => true,
            'htmlOptions' => array('class' => 'well'),
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
     ));
?>
<h1 class="titulo">Atención Primaria de Salud <small class="titulo">- APS</small> </h1>
<h4 class="titulo">Fundación Teatro Teresa Carreño</h4>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp; Mapa</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp; Mapa:</h4>
      </div>
      <div class="modal-body">
        <p align="center"> <div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.0230632811854!2d-66.90028428572366!3d10.498847892510238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a592a2bf8564b%3A0x6fd2f3fbd82a2a8e!2sTeatro+Teresa+Carre%C3%B1o!5e0!3m2!1ses-419!2sve!4v1478466439579" width="500" height="250" frameborder="0" style="border:0" allowfullscreen></iframe></iframe></div>
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<br><br>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo Yii::app()->request->baseUrl.'/images/sedes/ft_teresacarreno/0.jpg'?>" alt="" class= "tales">
    </div>

    <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/ft_teresacarreno/1.jpg' ?>" alt="" class= "tales">
    </div>

    <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/ft_teresacarreno/2.jpg' ?>" alt="" class= "tales">
    </div>

    <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/ft_teresacarreno/3.jpg' ?>" alt="" class= "tales">
    </div>

   <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/ft_teresacarreno/4.jpg' ?>" alt="" class= "tales">
    </div>

    <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/ft_teresacarreno/5.jpg' ?>" alt="" class= "tales">
    </div>

   <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/ft_teresacarreno/6.jpg' ?>" alt="" class= "tales">
    </div>
      
   <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/ft_teresacarreno/7.jpg' ?>" alt="" class= "tales">
  </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>


  <?php $this->endWidget(); ?>
</div>
