<?php

class SolicitudController extends Controller
{
/**
* @var string the default layout for the views. Defaults to '//layouts/column2', meaning
* using two-column layout. See 'protected/views/layouts/column2.php'.
*/
public $layout='//layouts/column2';

/**
* @return array action filters
*/
public function filters()
{
return array(
'accessControl', // perform access control for CRUD operations
);
}

/**
* Specifies the access control rules.
* This method is used by the 'accessControl' filter.
* @return array access control rules
*/
public function accessRules()
{
return array(
array('allow',  // allow all users to perform 'index' and 'view' actions
'actions'=>array('create','view', 'cargarEspecialidadPorSede', 'cargarEspecialidadPorMedico'),
'users'=>array('*'),
),
array('allow', // allow authenticated user to perform 'create' and 'update' actions
'actions'=>array('admin'),
'users'=>array('@'),
),
array('allow', // allow admin user to perform 'admin' and 'delete' actions
'actions'=>array('index','delete'),
'users'=>array('admin'),
),
array('deny',  // deny all users
'users'=>array('*'),
),
);
}

public function actionCargarEspecialidadPorSede(){

   $data = Especialidad::model()->findAll('sede=:sede', array(':sede'=>(int) $_POST['sede']));
 
   $data = CHtml::listData($data, 'id_especialidad', 'descripcion' );
 
   echo "<option value=''>Seleccione...</option>";
   foreach($data as $value=>$city_name)
   echo CHtml::tag('option', array('value'=>$value),CHtml::encode($city_name),true);

}

public function actioncargarEspecialidadPorMedico(){

   $data = Medicos::model()->findAll('especialidad=:especialidad', array(':especialidad'=>(int) $_POST['especialidad']));
 
   $data = CHtml::listData($data, 'id_medico', 'concate' );
 
   echo "<option value=''>Seleccione...</option>";
   foreach($data as $value=>$city_name)
   echo CHtml::tag('option', array('value'=>$value),CHtml::encode($city_name),true);

}

/**
* Displays a particular model.
* @param integer $id the ID of the model to be displayed
*/
public function actionView($id)
{
$this->render('view',array(
'model'=>$this->loadModel($id),
));
}

/**
* Creates a new model.
* If creation is successful, the browser will be redirected to the 'view' page.
*/
public function actionCreate()
{
$model=new Solicitud;

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

    if( is_numeric( $_GET['id'] ) && $_GET['id'] && isset( $_GET['id'] ) ){
    //var_dump($_GET['id']);
        #$sql = "SELECT * FROM paciente('" . $nacionalidad . "'," . $Cedula . ")";
        #$data = Yii::app()->db1->createCommand( $sql )->queryRow();
        $cedula = $_GET['id'];
        $paciente = Paciente::model()->find("cedula='$cedula'");
        if( !$paciente ){
            $this->redirect(array('paciente/create'));
        }
   
    }//fin si se envio parametro
   
// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

if(isset($_POST['Solicitud']))
{
$model->attributes=$_POST['Solicitud'];
$model->fk_paciente=$paciente->id_paciente;
if($model->save())
$this->redirect(array('view','id'=>$model->id_solicitud));
}

$consulta = Yii::app()->db->createCommand('select s.fecha_solicitud, count( s.fecha_solicitud) as cantidad_solicitud, m.cant_paciente_dia
from solicitud s
JOIN medicos m ON m.especialidad = s.fk_especialidad
WHERE s.fecha_solicitud > now()
GROUP BY s.fecha_solicitud, m.cant_paciente_dia')->queryAll();

$fechasagotadas="[";

foreach ( $consulta as $id => $fechasolicitud ){
     if( $fechasolicitud["cantidad_solicitud"] >= $fechasolicitud["cant_paciente_dia"] ){
		$fechasagotadas.= '"'.$fechasolicitud["fecha_solicitud"].'",' ;
	 }
}//fin foreach resultados consulta
//$fechasagotadas = '["2016-11-30","2016-11-28","2016-11-18","2016-11-15"]';

$fechasagotadas =  $fechasagotadas."]";
//var_dump($fechasagotadass);


$this->render('create',array( 'model'=>$model, 'paciente' => $paciente, 'fechasagotadas' => $fechasagotadas) );
}

/**
* Updates a particular model.
* If update is successful, the browser will be redirected to the 'view' page.
* @param integer $id the ID of the model to be updated
*/
public function actionUpdate($id)
{
$model=$this->loadModel($id);

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

if(isset($_POST['Solicitud']))
{
$model->attributes=$_POST['Solicitud'];
if($model->save())
$this->redirect(array('view','id'=>$model->id_solicitud));
}

$this->render('update',array(
'model'=>$model,
));
}

/**
* Deletes a particular model.
* If deletion is successful, the browser will be redirected to the 'admin' page.
* @param integer $id the ID of the model to be deleted
*/
public function actionDelete($id)
{
if(Yii::app()->request->isPostRequest)
{
// we only allow deletion via POST request
$this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
if(!isset($_GET['ajax']))
$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
}
else
throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
}

/**
* Lists all models.
*/
public function actionIndex()
{
$dataProvider=new CActiveDataProvider('Solicitud');
$this->render('index',array(
'dataProvider'=>$dataProvider,
));
}

/**
* Manages all models.
*/
public function actionAdmin()
{
$model=new Solicitud('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['Solicitud']))
$model->attributes=$_GET['Solicitud'];

$this->render('admin',array(
'model'=>$model,
));
}

/**
* Returns the data model based on the primary key given in the GET variable.
* If the data model is not found, an HTTP exception will be raised.
* @param integer the ID of the model to be loaded
*/
public function loadModel($id)
{
$model=Solicitud::model()->findByPk($id);
if($model===null)
throw new CHttpException(404,'The requested page does not exist.');
return $model;
}

/**
* Performs the AJAX validation.
* @param CModel the model to be validated
*/
protected function performAjaxValidation($model)
{
if(isset($_POST['ajax']) && $_POST['ajax']==='solicitud-form')
{
echo CActiveForm::validate($model);
Yii::app()->end();
}
}
}
