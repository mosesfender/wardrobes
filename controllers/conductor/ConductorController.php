<?php

namespace wardrobes\controllers\conductor;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

/**
 * Site controller
 */
class ConductorController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}