<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "operators".
 *
 * @property integer $id
 * @property string $name
 * @property string $help_for_4
 * @property string $help_for_5
 * @property integer $worker4_id
 * @property integer $worker5_id
 * @property integer $oborot_plan
 * @property integer $oborot_plan1
 *
 * @property UrlList[] $urlLists
 */
class Operators extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'operators';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'help_for_4', 'help_for_5', 'worker4_id', 'worker5_id', 'oborot_plan', 'oborot_plan1'], 'required'],
            [['worker4_id', 'worker5_id', 'oborot_plan', 'oborot_plan1'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['help_for_4', 'help_for_5'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'help_for_4' => 'Help For 4',
            'help_for_5' => 'Help For 5',
            'worker4_id' => 'Worker4 ID',
            'worker5_id' => 'Worker5 ID',
            'oborot_plan' => 'Oborot Plan',
            'oborot_plan1' => 'Oborot Plan1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function geturl_list()
    {
        return $this->hasMany(UrlList::className(), ['operator_id' => 'id']);
    }
}
