<?php
namespace wardrobes\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionTest()
    {
        return $this->render('index');
    }            
}
