<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\components\AccessControlExtend;
use app\models\CatTiendas;
use app\models\CatTenderos;
use app\models\CatTiendasRegistradas;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    // public function behaviors()
    // {
        // return [
        //     'access' => [
        //         'class' => AccessControlExtend::className(),
        //         'only' => ['logout', 'about'],
        //         'rules' => [
        //             [
        //                 'actions' => ['logout'],
        //                 'allow' => true,
        //                 'roles' => ['admin'],
        //             ],
                   
        //         ],
        //     ],
            // 'verbs' => [
            //     'class' => VerbFilter::className(),
            //     'actions' => [
            //         'logout' => ['post'],
            //     ],
            // ],
        //];
    //}

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionTest1(){
         //$auth = Yii::$app->authManager;
    
        //  // add "updatePost" permission
        //  $updatePost = $auth->createPermission('about');
        //  $updatePost->description = 'Update post';
        //  $auth->add($updatePost);
        //         // add "admin" role and give this role the "updatePost" permission
        // // as well as the permissions of the "author" role
        // $admin = $auth->createRole('test');
         //$auth->add($admin);
        // $auth->addChild($admin, $updatePost);
        
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($token = null)
    {
        // $usuario = Yii::$app->user->identity;
        // $auth = \Yii::$app->authManager;
        // $authorRole = $auth->getRole('test');
        // $auth->assign($authorRole, $usuario->getId());
        return $this->render('index');
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionConstruccion(){

        $this->layout = "classic/topBar/mainBlank";

        return $this->render("construccion");
    }

    

    public function actionGetcontrollersandactions()
    {
        $controllerlist = [];
        if ($handle = opendir('../controllers')) {
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != ".." && substr($file, strrpos($file, '.') - 10) == 'Controller.php') {
                    $controllerlist[] = $file;
                }
            }
            closedir($handle);
        }
        asort($controllerlist);
        $fulllist = [];
        foreach ($controllerlist as $controller):
            $handle = fopen('../controllers/' . $controller, "r");
            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    if (preg_match('/public function action(.*?)\(/', $line, $display)):
                        if (strlen($display[1]) > 2):
                            $fulllist[strtolower(substr($controller, 0, -14))][] = strtolower($display[1]);
                        endif;
                    endif;
                }
            }
            fclose($handle);
        endforeach;

        print_r($fulllist);
        exit;
        return $fulllist;
    }

    public function actionLogin($uddi = null){
        // if (!Yii::$app->user->isGuest) {

        //     return $this->goHome();
        // }

        $this->layout = 'classic/topBar/mainBlank';
        $model = new CatTiendas();

        if($_POST){
            //print_r($_POST['CatTiendas']['txt_clave_tienda']);exit;
            $clave_tienda = $_POST['CatTiendas']['txt_clave_tienda'];
            $clave_bodega = $_POST['CatTiendas']['txt_clave_bodega'];

            if($tienda = $model->validarExistaTienda($clave_tienda, $clave_bodega)){
                return $this->redirect(['ingresar', 'token'=>$tienda->txt_clave_tienda]);
            }else{
                $model->addError('txt_clave_bodega', "Tienda o bodega no encontradas");
            }
        }

        return $this->render('login', [
            'model' => $model,
            'uddi' => $uddi ? $uddi : null,
        ]);
    }

    public function actionIngresar($token = null){
       
        $tienda = CatTiendas::find()->where(['txt_clave_tienda'=>$token])->one();
    
        if(Yii::$app->getUser()->login($tienda)){

            return $this->redirect(['puntuacion', 'token'=>$tienda->txt_clave_tienda]);
        }

        return $this->goHome();
    }
//--------------------------------------------------------------------------------- test
    public function actionTest()
    {
        // $tendero = 1;
        // $tenderos = CatTenderos::find()->where(['txt_clave_tienda'=>'1t'])->one();
        // $compra = CatTenderos::getactualizarpuntos();
        // // print_r($tenderos);
        // // exit;


        $puntos = CatTenderos::find()->where(['txt_clave_tienda'=>'1t'])->one();
        $puntos->getActualizarPuntos();
        print_r($puntos);
         exit;

        //----------- consulta de tienda participante
        // $tendero = CatTenderos::find()->where(['txt_clave_tienda'=>'6t'])->one();
        // $tendero->getTiendaParticipante();
        // print_r($tendero);
        // exit;

        return $this->render('test',['compra'=>$puntos]);
    }

    public function actionConsultaTienda()
    {
        $tienda = CatTenderos::find()->where(['txt_clave_tienda'=>$id])->one();
        $tienda->getTiendaParticipante();
         print_r($tienda);
        exit;
    }

    public function actionPuntuacion($token = null){
        $tienda = CatTiendas::find()->where(['txt_clave_tienda'=>$token])->one();
        $puntuajeActual = $tienda->wrkPuntuajeActuals;
        
        return $this->render('puntuacion', [
            'puntuajeActual' => $puntuajeActual,
            'tienda' => $tienda
        ]);
    }
}
