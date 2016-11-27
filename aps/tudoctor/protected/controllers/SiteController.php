<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'

		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	
	public function actionCasa()
	{
	$this->render('casa');
	}

	public function actionUsuario_Registrado()
	{
	$this->render('usuario_registrado');
	}
	
	public function actionRecuperarContrasena()
	{
	$model = new RecuperarContrasena;
	$msg = '';

	if (isset($_POST["RecuperarContrasena"]))
	{
		$model->attributes = $_POST['RecuperarContrasena'];
		if(!$model->validate()){
			echo "<script>alert('Ocurrio un error al enviar los Datos.');</script>";
			//$msg = "<strong class='text-error'>Error al enviar los Datos</strong>";
		}else{
			//Verificar si el usuario existe
		$consulta = "SELECT id_usuario, usuario, correo_ppal FROM usuario WHERE ";
		$consulta .= "usuario='".$model->usuario."' AND correo_ppal='".$model->correo_ppal."' AND telefono_celular='".$model->telefono_celular."' ";

		$resultado = Yii::app()->db->createCommand($consulta);
		$filas = $resultado->query();
		$existe = false;
		
		foreach($filas as $fila)
			{

			$id = $fila["id_usuario"];
			$existe = true;
			}
		//si el usuario existe
		if($existe == true) {
				
$clave_nueva = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);				

$modelusuario = Usuario::model()->findByPk( $id );	
$modelusuario->clave = md5( $clave_nueva );
$modelusuario->update();
	
			//enviar correo
			$mensaje = '<HTML>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <body style="font:0px Arial;color:#ffffff;">
        <table align=center width=800 style="font:14px Arial;color:#000000;">
       
        <tr><td><b>Reciba un cordial saludo.</td></tr>
        
        <tr><td><b><br>El Instituto Autónomo Biblioteca Nacional y Servicios de Bibliotecas</b> le informa que has solicitado <b>Recuperar tu Contraseña</b>, a continuación le indicamos los detalles:<br></td></tr>

        <tr><td><b><h3>-- Datos de Usuario --</h3></b></td></tr>
        <tr><td><b>USUARIO: </b>'.$model->usuario.'</td></tr>
        <tr><td><b>CLAVE: </b>'.$clave_nueva.'</td></tr>
        <tr><td><b>CORREO PRINCIPAL: </b> '.$model->correo_ppal.'</td></tr>

	<tr><td><br><br>Para realizar el cambio de la contraseña debe seguir los siguientes pasos:<br>
<b>1.-</b> Iniciar sesión con los datos suministrados en este correo (<b>usuario y clave</b>);<br>
<b>2.-</b> Hacer click en la ultima opción del menú horizontal => donde aparece el número de RIF;<br>
<b>3.-⁠</b>⁠⁠⁠⁠⁠⁠⁠⁠⁠⁠⁠⁠⁠⁠⁠⁠⁠⁠⁠⁠⁠⁠⁠⁠⁠⁠⁠ Hacer click en la opción Modificar Clave.<br>
<a href=\'http://depositolegal.bnv.gob.ve\'>Ir al Sistema de Depósito Legal</a><br></td></tr>
	        
        <tr><td style="font:12px Arial;color:#383838;"><br><br>Este es un mensaje automático. No responda al remitente. Si desea comunicarse con nosotros puede contactarnos a través de los números telefónicos (0212)505.91.75 / (0212)505.91.76 / (0212)505.91.77, o a través del correo electrónico deposito.legalvenezuela@bnv.gob.ve</td></tr>
        </table>
    </body>
</HTML>'; 
$mail = new YiiMailer();
$mail->setFrom("No-responder@bnv.gob.ve", "Depósito Legal");
$mail->setTo($model->correo_ppal);
//$mail->AddCC($model->correo_sec);
$mail->Subject="Recuperar Contraseña";
$mail->MsgHTML($mensaje);

if ($mail->send()) {
			  echo "<script>alert('¡Solicitud de Recuperar Contraseña Exitoso! Por favor verifique su correo electronico que se le ha enviado su contraseña.');</script>";
			}else {
			    //Yii::app()->user->setFlash('error','Error al enviar el correo electrónico: '.$mail->getError());
			    //$msg = "<strong class='text-error'>Error, el usuario no se encuentra registrado.</strong>";
			    //echo "<script>alert('');</script>";
			}/*else{
				$msg = "<strong class='text-error'>Error, el usuario no se encuentra registrado.</strong>";
			}*/
			}else{
				$msg = "<strong class='text-error'>Error: Disculpe, sus Datos no coinciden, por favor verifique los Datos e intente de nuevo. <br><br>Si el error persiste envie un correo electrónico a: <a href=\"deposito.legalvenezuela@bnv.gob.ve\">deposito.legalvenezuela@bnv.gob.ve</a><br></strong>";
				}// fin si if $existe == true
		}
	}
	$this->render('recuperarcontrasena', array('model' => $model, 'msg'=> $msg));
	}

	
	public function actionContact()
	{
	
		$model=new ContactForm;
		if(isset($_POST['ContactForm'])){
		
			$model->attributes=$_POST['ContactForm'];
			
			if( $model->validate() ){
						
		
			$mail = new YiiMailer();
			//$mail->clearLayout();//if layout is already set in config
			$mail->setFrom( $model->email, $model->name );
			$mail->setTo(Yii::app()->params['adminEmail']);
			//$mail->setTo( 'liseth.delgado@bnv.gob.ve' );
			$mail->setSubject( $model->subject );
			$mail->setBody( $model->body );
			//$mail->send();
			if ($mail->send()) {
			    Yii::app()->user->setFlash('contact','Gracias por contactarnos. Te responderemos lo más pronto posible.');
			} else {
			    Yii::app()->user->setFlash('error','Error al enviar el correo electrónico: '.$mail->getError());
			}
			
			
			/*	$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Gracias por contactarnos. Te responderemos lo más pronto posible.');*/
				$this->refresh();
				echo "Hola";
			}
		}// fin if post contact
		
		$this->render('contact',array('model'=>$model));
			 
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
