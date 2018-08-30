<?php


use yii\web\Controller;

Class TestController extends Controller
{
    public Function actionIndex()
    {
        $tenderos = 1;
        return $this->render('index');
    }
}
?>