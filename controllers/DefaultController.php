<?php

namespace frontend\modules\admin\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionDepo()
    {
    	echo "depo";
    }
}
