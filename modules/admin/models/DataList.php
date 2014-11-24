<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "data_list".
 *
 * @property integer $id
 * @property string $name
 *
 * @property DataListItems[] $dataListItems
 */
class DataList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 200]
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDataListItems()
    {
        return $this->hasMany(DataListItems::className(), ['data_list_id' => 'id']);
    }
}
