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
use app\models\WrkHistorial;
use yii\web\UploadedFile;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use app\models\CatBodegas;
use app\models\WrkPuntuajeActual;
use app\models\CatNiveles;
use app\models\Constantes;
use app\models\EntImagenes;
use app\models\EntVideos;

class SiteController extends Controller
{
    public $enableCsrfValidation = false;

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControlExtend::className(),
                'only' => ['logout', 'about', 'index', 'puntuacion'],
                'rules' => [
                    [
                        'actions' => ['logout', 'index', 'puntuacion'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                   
                ],
            ],
            // 'verbs' => [
            //     'class' => VerbFilter::className(),
            //     'actions' => [
            //         'logout' => ['post'],
            //     ],
            // ],
        ];
    }

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

        // $this->layout = 'classic/topBar/mainBlank';
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
    
        if(Yii::$app->user->login($tienda)){

            return $this->redirect(['puntuacion']);
        }exit;

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

    public function actionPuntuacion(){
        $tienda = Yii::$app->user->identity;
        
        $tienda = CatTiendas::find()->where(['txt_clave_tienda'=>$tienda->txt_clave_tienda])->one();
        $puntuajeActual = $tienda->wrkPuntuajeActuals;

        $imagenes = EntImagenes::find()->where(['b_publicado'=>1])->all();
        $videos = EntVideos::find()->where(['b_publicado'=>1])->all();
        
        return $this->render('puntuacion', [
            'puntuajeActual' => $puntuajeActual,
            'tienda' => $tienda,
            'imagenes' => $imagenes,
            'videos' => $videos
        ]);
    }
    public function actionInicio()
    {
        return $this->render('index');
    }
    public function actionAvisoPrivacidad()
    {
        return $this->render("aviso-privacidad");
    }
    public function actionTerminosCondiciones()
    {
        return $this->render("terminos-condiciones");
    }
    public function actionDatosTienda()
    {
        return $this->render("datos-tienda");
    }
    public function actionGanadores()
    {
        return $this->render("ganadores");
    }
    public function actionTestimonios()
    {
        return $this->render("testimonios");
    }
    public function actionPremios()
    {
        return $this->render("premios");
    }
}
