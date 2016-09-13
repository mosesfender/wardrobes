<?php

namespace wardrobes\controllers\conductor;

use Yii;

class GaleryController extends \yii\base\Controller {
    /**
     * @var \mosesfender\galery\Component
     */
    public $gal;

    public function init() {
        parent::init();
        $this->gal = \yii::$app->gal;
    }

    public function actionIndex() {
        return $this->render("index", ["gal"=>$this->gal]);
    }

}
