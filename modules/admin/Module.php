<?php

namespace app\modules\admin;
use Yii;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';

    public function init()
    {
        parent::init();

        //$this->layoutPath = Yii::getPathOfAlias('admin.views.layouts');
        // set the layout
        $this->layout = 'main';
    }
}
