<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

/**Контролер для страниц сайта*/
class PageController extends Controller
{
    /**
     *action для страницы списка товаров
     */
    public function actionListproducts()
    {
        return $this->render('listproducts');
    }
}
