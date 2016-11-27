<?php

class ValidacionJsController extends Controller {
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
//public $layout='//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('BuscarSaime', 'Session'),
                'users' => array('*'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * ACCION QUE BUSCA POR CEDULA EN EL SAIME
     */
    public function actionbuscarSaime() {
        $Cedula = (int) $_POST['cedula'];
        $nacionalidad = $_POST['nacionalidad'];

        $SQL3 = "SELECT * FROM saime.buscar_diex('" . $nacionalidad . "'," . $Cedula . ")";
        $data = Yii::app()->db1->createCommand($SQL3)->queryRow();

        if ($data) {
            $date = date_create($data['dtmnacimiento']);
            $data = array(
                'intcedula' => $data['intcedula'],
                'strgenero' => $data['strgenero'],
                'strnombre_primer' => $data['strnombre_primer'],
                'strnombre_segundo' => $data['strnombre_segundo'],
                'strapellido_primer' => $data['strapellido_primer'],
                'strapellido_segundo' => $data['strapellido_segundo'],
                'dtmnacimiento' => date_format($date, 'd/m/Y'),
            );
            echo json_encode($data);
        } else {
            echo json_encode(1);
        }
    }

    /**
     * FUNCION QUE BUSCA LA DISPONIBIIDAD DE LA CITA DE ACUERDO AL SOLICITANTE
     */
    public function actionbuscarCita() {
        $cedula = $_POST['cedula'];
        $nacionalidad = $_POST['nacionalidad'];
        $fechaCita = $_POST['fechaCita'];
        $tipoCita = $_POST['tipoCita'];

        $count = Solicitud::model()->count("fk_tipo_solicitud=:fk_tipo_solicitud AND fecha_solicitud=:fecha_solicitud", array(
            "fk_tipo_solicitud" => $tipoCita,
            "fecha_solicitud" => Generico::formatoFecha($fechaCita)
        ));
        if ($count <= 10) {
            //CONSULTA DATOS DEL USUARIO EN LA TABLA SILICITANTE
            $usuario = Solicitante::model()->findByAttributes(array('fk_nacionalidad' => $nacionalidad, 'cedula' => $cedula));
            //VALIDAD QUE EL USUARIO NO ESTE REGISTRADO
            if (empty($usuario)) {
                echo json_encode(2);
            } else {
                $existeCita = Solicitud::model()->findByAttributes(
                        array(
                            'fk_solicitante' => $usuario->id_solicitante,
                            'fk_tipo_solicitud' => $tipoCita,
                            'fecha_solicitud' => Generico::formatoFecha($fechaCita)
                ));
                if (empty($existeCita))
                //SI NO EXISTE CITA
                    echo json_encode(2);
                else
                //SI EXISTE CITA REGISTRADA
                    echo json_encode(3);
            }
        } else
        //CITAS NO DISPONIBLE DEBIDO QUE SE ALCALZO EL MAXIMO
            echo json_encode(1);
    }

    /**
     * FUNCION QUE MUESTRA TODOS LOS MUNICIPIO DE ACUERDO A UN ID DE UN ESTADO
     */
    public function actionBuscarMunicipios() {
        $Id = (isset($_POST['Tblestado']['estado']) ? $_POST['Tblestado']['estado'] : $_GET['estado']);
        $Selected = isset($_GET['municipio']) ? $_GET['municipio'] : '';
        if (!empty($Id)) {
            $criteria = new CDbCriteria;
            $criteria->addCondition('t.clvestado = :clvestado');
            $criteria->params = array(':clvestado' => $Id);
            $criteria->order = 't.strdescripcion ASC';

            $data = CHtml::listData(Tblmunicipio::model()->findAll($criteria), 'clvcodigo', 'strdescripcion');
            echo CHtml::tag('option', array('value' => ''), CHtml::encode('SELECCIONE'), true);
            foreach ($data as $id => $value) {
                if ($Selected == $id) {
                    echo CHtml::tag('option', array('value' => $id, 'selected' => true), CHtml::encode($value), true);
                } else {
                    echo CHtml::tag('option', array('value' => $id), CHtml::encode($value), true);
                }
            }
        } else {
            echo CHtml::tag('option', array('value' => ''), CHtml::encode('SELECCIONE'), true);
        }
    }
    
    /**
     * FUNCION QUE MUESTRA TODOS LAS PARROQUIAS DE ACUERDO A UN ID DE UN MUNICIPIO
     */
    public function actionBuscarParroquias() {
        $Id = (isset($_POST['Tblmunicipio']['clvcodigo']) ? $_POST['Tblmunicipio']['clvcodigo'] : $_GET['municipio']);
        $Selected = isset($_GET['parroquia']) ? $_GET['parroquia'] : '';
        if (!empty($Id)) {
            $criteria = new CDbCriteria;
            $criteria->addCondition('t.clvmunicipio = :clvmunicipio');
            $criteria->params = array(':clvmunicipio' => $Id);
            $criteria->order = 't.parroquia ASC';
            $data = CHtml::listData(Tblparroquia::model()->findAll('clvmunicipio=:clvmunicipio', array(':clvmunicipio' => $Id)), 'clvcodigo', 'strdescripcion');
            echo CHtml::tag('option', array('value' => ''), CHtml::encode('SELECCIONE'), true);
            foreach ($data as $id => $value) {
                if ($Selected == $id) {
                    echo CHtml::tag('option', array('value' => $id, 'selected' => true), CHtml::encode($value), true);
                } else {
                    echo CHtml::tag('option', array('value' => $id), CHtml::encode($value), true);
                }
            }
        } else {
            echo CHtml::tag('option', array('value' => ''), CHtml::encode('SELECCIONE'), true);
        }
    }

    public function actionSession(){
         Yii::app()->session['cedula'] = $_POST['cedula'];
    }

}
