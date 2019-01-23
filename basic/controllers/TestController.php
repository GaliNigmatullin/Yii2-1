<?php
/**
 * Created by PhpStorm.
 * User: Gali9
 * Date: 13.01.2019
 * Time: 15:12
 */

namespace app\controllers;


use app\components\TestService;
use app\models\Product;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        $content = \Yii::$app->test->run();
        return $this->render('index', [
            'content' => $content
        ]);


      /*  $product = new Product();
        $product->id = 1;
        $product->name = 'car';
        $product->category = 1;
        $product->price = 1000;

        return $this->render('index', [
            'content' => 'asfdasf',
            'product' => $product,
        ]);*/
    }
}