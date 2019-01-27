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
use yii\db\Query;
use yii\helpers\VarDumper;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {

        $model = new Product(
            ['id' => 1, 'name' => 'aadf', 'price' => 1001]
        );

        /*//Вставляю записи в таблицу user

          _end(\Yii::$app->db->createCommand()->insert('user', [
            'username' => 'Igor',
            'password_hash' => 'adfsdf',
            'auth_key' => 'password',
            'creator_id' => 1,
            'updater_id' => null,
            'created_at' => 2343625,
            'updated_at' => null,
        ])->execute());*/

        /*//выбрал запись с id=1
         * _end(\Yii::$app->db->createCommand('SELECT * FROM user WHERE id= :id', ['id' => 1])->queryAll());*/


        /*//выбрал все записи с id>1 отсортированные по имени (orderBy())
        $query = new Query();
        $result = $query
            ->select(['*'])
            ->from('user')
            ->where(['>', 'id', 1])
            ->orderBy(['username' => SORT_DESC])
            ->all();
        _end($result);*/


        /*//количество записей
        $query = new Query();
        $result = $query
            ->select(['*'])
            ->from('user')
            ->count();
        _end($result);*/


        /*//вставил одним вызовом сразу 3 записи в таблицу task
        \Yii::$app->db->createCommand()->batchInsert('task', ['title', 'description', 'creator_id',
            'updater_id', 'created_at', 'updated_at'], [
            ['h/w_1', 'сделай дз к уроку 1', 3, null, 123123231, null],
            ['h/w_2', 'сделай дз к уроку 2', 1, null, 343534664, null],
            ['h/w_3', 'сделай дз к уроку 3', 2, null, 436230876, null],
        ])->execute();*/

        /*//c innerjoin не разобрался
        $query = new Query();
        $result = $query
            ->innerJoin('user', )*/


        return $this->render('index', [
            'model' => $model,
        ]);



        //$model -> validate();
        //return VarDumper::dumpAsString($model->getErrors(), 5, true);
       /* $content = \Yii::$app->test->run();
        return $this->render('index', [
            'content' => $content
        ]);*/


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