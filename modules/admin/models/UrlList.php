<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "url_list".
 *
 * @property integer $id
 * @property integer $operator_id
 * @property string $name
 *
 * @property Operators $operator
 */
class UrlList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'url_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['operator_id', 'name'], 'required'],
            [['operator_id'], 'integer'],
            [['name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'operator_id' => 'Operator ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOperator()
    {
        return $this->hasOne(Operators::className(), ['id' => 'operator_id']);
    }
}
