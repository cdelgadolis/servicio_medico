<?php
/* @var $this SiteController */

//$this->pageTitle=Yii::app()->name;
$this->pageTitle=Yii::app()->name . ' - Lic. Pedro Torres';
$this->breadcrumbs=array(
	'Sede'=>array('index'), 'Lic. Pedro Torres',
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
<h4 class="titulo">Lic. Pedro Torres</h4>
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
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.8592786215117!2d-66.91443068498774!3d10.511747992501473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5ecedee85c89%3A0x8e231d121bdf6d9d!2sBiblioteca+Nacional!5e0!3m2!1ses-419!2s!4v1444942339987" width="500" height="250" frameborder="0" style="border:0" allowfullscreen></iframe></div>
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
    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
    <li data-target="#myCarousel" data-slide-to="8"></li>
    <li data-target="#myCarousel" data-slide-to="9"></li>
    <li data-target="#myCarousel" data-slide-to="10"></li>
    <li data-target="#myCarousel" data-slide-to="11"></li>
    <li data-target="#myCarousel" data-slide-to="12"></li>
    <li data-target="#myCarousel" data-slide-to="13"></li>
    <li data-target="#myCarousel" data-slide-to="14"></li>
    <li data-target="#myCarousel" data-slide-to="15"></li>
    <li data-target="#myCarousel" data-slide-to="16"></li>
    <li data-target="#myCarousel" data-slide-to="17"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo Yii::app()->request->baseUrl.'/images/sedes/SMPT/1.jpg'?>" alt="" class= "tales">
    </div>

    <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/SMPT/2.jpg' ?>" alt="" class= "tales">
    </div>

    <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/SMPT/3.jpg' ?>" alt="" class= "tales">
    </div>

    <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/SMPT/4.jpg' ?>" alt="" class= "tales">
    </div>

   <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/SMPT/5.jpg' ?>" alt="" class= "tales">
    </div>

  <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/SMPT/6.jpg' ?>" alt="" class= "tales">
    </div>

    <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/SMPT/7.jpg' ?>" alt="" class= "tales">
    </div>

    <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/SMPT/8.jpg' ?>" alt="" class= "tales">
    </div>

   <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/SMPT/9.jpg' ?>" alt="" class= "tales">
    </div>
    <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/SMPT/10.jpg' ?>" alt="" class= "tales">
    </div>

    <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/SMPT/11.jpg' ?>" alt="" class= "tales">
    </div>

    <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/SMPT/12.jpg' ?>" alt="" class= "tales">
    </div>

   <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/SMPT/13.jpg' ?>" alt="" class= "tales">
    </div>
    <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/SMPT/14.jpg' ?>" alt="" class= "tales">
    </div>

    <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/SMPT/15.jpg' ?>" alt="" class= "tales">
    </div>

    <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/SMPT/16.jpg' ?>" alt="" class= "tales">
    </div>

   <div class="item">
      <img src="<?= Yii::app()->getBaseUrl(true) . '/images/sedes/SMPT/17.jpg' ?>" alt="" class= "tales">
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
