<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "list_item".
 *
 * @property integer $id
 * @property integer $list_id
 * @property string $value
 *
 * @property Lists $list
 */
class ListItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'list_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['list_id', 'value'], 'required'],
            [['list_id'], 'integer'],
            [['value'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'list_id' => 'List ID',
            'value' => 'Value',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLists()
    {
        return $this->hasOne(Lists::className(), ['id' => 'list_id']);
    }
}
