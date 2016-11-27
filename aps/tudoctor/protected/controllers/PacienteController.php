<?php

class PacienteController extends Controller
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
'actions'=>array('create','update', 'home','BuscarSaime', 'Session'),
'users'=>array('*'),
),
array('allow', // allow authenticated user to perform 'create' and 'update' actions
'actions'=>array('admin','view'),
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
$model=new Paciente;

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

if(isset($_POST['Paciente']))
{
$model->attributes=$_POST['Paciente'];

$model->fk_usuario_creacion=Yii::app()->user->id;

$model->foto = CUploadedFile::getInstance( $model,'foto' );

if($model->save()){
	if(!empty($model->foto)){
		$model->foto->saveAs( Yii::getPathOfAlias('webroot')."/images/pacientes/".$model->foto );
	}

$this->redirect(array('view','id'=>$model->id_paciente));
}
}

$this->render('create',array(
'model'=>$model,
));
}

public function actionbuscarCedulaR()
        {
			echo "<script>alert('message');</script>";
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

if(isset($_POST['Paciente']))
{
$model->attributes=$_POST['Paciente'];
$model->fecha_actualizacion=date('Y-m-d');
$model->fk_usuario_actualizacion=Yii::app()->user->id;
if($model->save())
$this->redirect(array('view','id'=>$model->id_paciente));
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
$dataProvider=new CActiveDataProvider('Paciente');
$this->render('index',array(
'dataProvider'=>$dataProvider,
));
}

/**
* Manages all models.
*/
public function actionAdmin()
{
$model=new Paciente('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['Paciente']))
$model->attributes=$_GET['Paciente'];

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
$model=Paciente::model()->findByPk($id);
if($model===null)
throw new CHttpException(404,'The requested page does not exist.');
return $model;
}

public function actionHome()
	{
	$model = new Home;	
	
	if (isset($_POST["Home"]))
	{
		$model->attributes = $_POST['Home'];
		if(!$model->validate()){
			echo "<script>alert('Ocurrio un error al enviar los Datos.');</script>";
			//$msg = "<strong class='text-error'>Error al enviar los Datos</strong>";
		}else{
			//Verificar si el paciente existe
		$consulta = "SELECT cedula FROM paciente WHERE cedula='".$model->cedula."'";
		
		$resultado = Yii::app()->db->createCommand($consulta);
		$filas = $resultado->query();
		$existe = false;
		
		foreach($filas as $fila)
			{
			echo $id = $fila["cedula"];
			$existe = true;
			}
			
		//si el paciente existe
		if($existe == true) {
				$this->redirect(array('solicitud/create', 'id'=>$id));
				//$this->render('/solicitud/create', array('model'=>$model,));
			}else{
				$msg = "<strong class='text-error'>Error: Disculpe, sus Datos no coinciden, por favor verifique los Datos e intente de nuevo. <br><br>Si el error persiste envie un correo electrónico a: <a href=\"deposito.legalvenezuela@bnv.gob.ve\">deposito.legalvenezuela@bnv.gob.ve</a><br></strong>";
				$this->redirect(array('paciente/create', 'param1'=>$model->cedula));
				//$this->render('/paciente/create', array('model' => $model));
				}// fin si if $existe == true
		return;
		}
	}
	
	
	$this->render('home', array('model' => $model));
	}


/**
* Performs the AJAX validation.
* @param CModel the model to be validated
*/
protected function performAjaxValidation($model)
{
if(isset($_POST['ajax']) && $_POST['ajax']==='paciente-form')
{
echo CActiveForm::validate($model);
Yii::app()->end();
}
}
}
