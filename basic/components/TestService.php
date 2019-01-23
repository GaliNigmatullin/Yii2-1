<?php

namespace app\components;


use yii\base\Component;

class TestService extends Component
{
    public $myProp = '1ый пункт из дз';

    public function run(){
        return $this->myProp;
    }
}