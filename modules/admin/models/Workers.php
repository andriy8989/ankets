<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "workers".
 *
 * @property integer $id
 * @property string $login
 * @property string $pass
 * @property integer $group_worker
 */
class Workers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'workers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'pass', 'group_worker'], 'required'],
            [['group_worker'], 'integer'],
            [['login', 'pass'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'pass' => 'Pass',
            'group_worker' => 'Group_worker',
        ];
    }
}
