<?php
/**
 * Created by PhpStorm.
 * User: Gali9
 * Date: 13.01.2019
 * Time: 15:26
 */

namespace app\models;


use yii\base\Model;

class Product extends Model
{
    public $id;
    public $name;
    public $category;
    public $price;

}
