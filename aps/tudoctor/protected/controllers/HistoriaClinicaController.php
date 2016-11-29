<?php

class HistoriaClinicaController extends Controller
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
//'actions'=>array('view'),
//'users'=>array('*'),
),
array('allow', // allow authenticated user to perform 'create' and 'update' actions
'actions'=>array('admin','create','update','view','buscarpaciente'),
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
$model=new HistoriaClinica;

if( is_numeric( $_GET['id'] ) && $_GET['id'] && isset( $_GET['id'] ) ){
        $id = $_GET['id'];
        $paciente = Paciente::model()->find("id_paciente='$id'");
        if( !$paciente ){
            $this->redirect(array('paciente/create'));
        }
   
    }//fin si se envio parametro
// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

if(isset($_POST['HistoriaClinica']))
{
$model->attributes=$_POST['HistoriaClinica'];
$model->paciente=$paciente->id_paciente;
$model->fk_usuario_creacion=Yii::app()->user->id;
if($model->save())
$this->redirect(array('view','id'=>$model->id_historia_clinica));
}

$this->render('create',array('model'=>$model, 'paciente' => $paciente));
}

/**
* Updates a particular model.
* If update is successful, the browser will be redirected to the 'view' page.
* @param integer $id the ID of the model to be updated
*/

public function actionBuscarPaciente()
{
	$model = new BuscarPaciente;
	$msg = '';
	
		if (isset($_POST["BuscarPaciente"]))
	{
		$model->attributes = $_POST['BuscarPaciente'];
		if(!$model->validate()){
			echo "<script>alert('Ocurrio un error al enviar los Datos.');</script>";
			//$msg = "<strong class='text-error'>Error al enviar los Datos</strong>";
		}else{
			//Verificar si el paciente existe
		$consulta = "SELECT id_paciente FROM paciente WHERE cedula='".$model->cedula."'";
		
		$resultado = Yii::app()->db->createCommand($consulta);
		$filas = $resultado->query();
		$existe = false;
		
		foreach($filas as $fila)
			{
			$id = $fila["id_paciente"];
			$existe = true;
			}
			
		//si el paciente existe
		if($existe == true) {
			$consulta2 = "SELECT id_historia_clinica FROM historia_clinica WHERE paciente='".$id."' ";
			
			$resultado2 = Yii::app()->db->createCommand($consulta2);
			$Filas = $resultado2->query();
			$Existe = false;
			
			foreach($Filas as $Fila)
				{
				$Id = $Fila["id_historia_clinica"];
				$Existe = true;
				}
				if($Existe == true) {
				echo "<script>alert('Importante: El paciente ya tiene una Historia Clinica General creada, por favor ingrese al Modulo Paciente => ADMIN.');</script>";
				$msg = "<strong class='text-error'>Importante: El paciente ya tiene una Historia Clinica General creada, por favor ingrese al Modulo Paciente => ADMIN.<br><br></strong>";
				$this->render('buscarpaciente', array('model' => $model));		
			}else{
				$this->redirect(array('historiaClinica/create', 'id'=>$id));
				}
			
			}else{
				 echo "<script>alert('Error: Disculpe, la cédula del paciente no se encuentra registrada en el sistema, por favor verifique la información e intente de nuevo. Si el error persiste envie un correo electrónico a: otisistemas@bnv.gob.ve');</script>";
				//$msg = "<strong class='text-error'>Error: Disculpe, la cédula del paciente no se encuentra registrada en el sistema, por favor verifique la información e intente de nuevo. <br><br>Si el error persiste envie un correo electrónico a: <a href=\"otisistemas@bnv.gob.ve\">otisistemas@bnv.gob.ve</a><br></strong>";
				$this->render('buscarpaciente', array('model' => $model));
				}// fin si if $existe == true
		return;
		}
	}
$this->render('buscarpaciente', array('model' => $model));
}

public function actionUpdate($id)
{
$model=$this->loadModel($id);

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

if(isset($_POST['HistoriaClinica']))
{
$model->attributes=$_POST['HistoriaClinica'];
$model->fecha_actualizacion=date('Y-m-d');
$model->fk_usuario_actualizacion=Yii::app()->user->id;
if($model->save())
$this->redirect(array('view','id'=>$model->id_historia_clinica));
}

$this->render('update',array('model'=>$model));
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
$dataProvider=new CActiveDataProvider('HistoriaClinica');
$this->render('index',array(
'dataProvider'=>$dataProvider,
));
}

/**
* Manages all models.
*/
public function actionAdmin()
{
$model=new HistoriaClinica('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['HistoriaClinica']))
$model->attributes=$_GET['HistoriaClinica'];

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
$model=HistoriaClinica::model()->findByPk($id);
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
if(isset($_POST['ajax']) && $_POST['ajax']==='historia-clinica-form')
{
echo CActiveForm::validate($model);
Yii::app()->end();
}
}
}
